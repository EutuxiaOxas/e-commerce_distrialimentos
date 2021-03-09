<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    public function getAddress()
    {
        $user = auth()->user();

        if(isset($user))
        {
            $direcciones = Address::with(['delivery_route', 'state', 'city'])->where('user_id', $user->id)->get();
            return response()->json($direcciones, 200);
        }

        return response()->json("Unauthorized", 401);
    }


    public function getPickUpAddress($id) 
    {
        $user = auth()->user();

        if(isset($user))
        {
            $direccion = Address::with(['delivery_route', 'state', 'city'])->where('user_id', 1)->first();
            return response()->json($direccion, 200);
        }

        return response()->json("Unauthorized", 401);
    }
}
