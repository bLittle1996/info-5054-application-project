<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

use App\Vehicle;
use App\VehicleStat;

class VehicleController extends Controller
{
  public function create(Request $request) {
    $this->validate($request, [
      'make' => 'required',
      'model' => 'required',
      'colour' => 'required',
      'year' => 'required|integer',
      'license_plate' => 'required',
      'VIN' => 'required'
      ]);
    try {
      $vehicle = new Vehicle();
      $vehicle->make = $request['make'];
      $vehicle->model = $request['model'];
      $vehicle->year = $request['year'];
      $vehicle->colour = $request['colour'];
      $vehicle->license_plate = $request['license_plate'];
      $vehicle->VIN = $request['VIN'];
      Auth::user()->vehicles()->save($vehicle);

      return redirect()->back();
    } catch (\Exception $e) {
      return redirect()->back()->with(['failure' => 'Unable to create vehicle. ']);
    }
  }


  public function jsonCreate(Request $request) {
    try {
      DB::beginTransaction();
      $vehicle = new Vehicle();
      $vehicle->make = $request['make'];
      $vehicle->model = $request['model'];
      $vehicle->year = $request['year'];
      $vehicle->colour = $request['colour'];
      $vehicle->license_plate = $request['license_plate'];
      $vehicle->VIN = $request['VIN'];
      Auth::user()->vehicles()->save($vehicle);
      DB::commit();
      return response()->json(Auth::user()->vehicles()->get(), 200);
    } catch (\Exception $ex) {
      DB::rollback();
      return response()->json(['error' => 'Unable to create vehicle', 'error_message' => $ex->getMessage()], 500);
    }
  }

  public function apiVehicleStatAdd(Request $request, Vehicle $vehicle) {
    try {
      $vehicleStat = new VehicleStat();
      $vehicleStat->meters_travelled = $request['meters_travelled'];
      if(!empty($request['log_duration'])) $vehicleStat->log_duration = $request['log_duration'];
      if(!empty($request['litres_of_fuel_used']))$vehicleStat->litres_of_fuel_used = $request['litres_of_fuel_used'];
      if(!empty($request['odo_start'])) $vehicleStat->odo_start = $request['odo_start'];
      if(!empty($request['odo_end'])) $vehicleStat->odo_end = $request['odo_end'];
      $vehicleStat->vehicle()->associate($vehicle);
      $vehicleStat->save();
      return response()->json(['success' => 'Added vehicle stat!'], 200);
    } catch(\Exception $e) {
      return response()->json(['error' => 'Unable to add stat to vehicle!', 'error_message' => $e->getMessage()], 500);
    }
  }
}
