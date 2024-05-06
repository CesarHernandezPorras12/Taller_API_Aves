<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Add this line to import the Log class

class LoginController extends Controller
{
    public function login(Request $request)
    {
        var_dump($request->all());
        Log::info('Datos de la solicitud:', $request->all());
        $this->validateLogin($request);
        
        if(Auth::attempt($request->only(['email','password']))){
            return response()->json(
                [
                    'token'=>$request->user()->createToken($request->name)->plainTextToken,
                    'message'=>"success",
                    'status'=>true
                ]
            );
        }

        return response()->json([
            'message'=>"Unauthorized",
            'status'=> false]);
    }
    public function validateLogin(Request $request){
        return $request->validate([]);
    }
}
