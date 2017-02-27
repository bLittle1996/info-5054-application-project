<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request) {
      $this->validate($request, [
        'name' => 'required',
      ]);

      try {
        $user = Auth::user();
        $user->name = $request['name'];
        $user->country = $request['country'];
        $user->province = $request['province'];
        $user->city = $request['city'];
        $user->address = $request['address'];
        $user->postal_code = $request['postal_code'];
        $user->save();

        return redirect()->back();
      } catch (\Exception $e) {
        return redirect()->back()->with(['failure' => 'Unable to update user. ' . $e->getMessage()]);
      }
    }

    public function jsonUpdate(Request $request) {
      try {
        $user = Auth::user();
        $user->name = $request['name'];
        $user->country = $request['country'];
        $user->province = $request['province'];
        $user->city = $request['city'];
        $user->address = $request['address'];
        $user->postal_code = $request['postal_code'];
        $user->save();

        return response()->json($user, 200);
      } catch (\Exception $e) {
        return response()->json(['error' => "Unable to update user!", "error_message" => $e->getMessage()], 500);
      }
    }
}
