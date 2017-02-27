<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

use App\Vehicle;

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
}
