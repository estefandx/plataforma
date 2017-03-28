<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Namshi\JOSE\JWT;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiAuthController extends Controller
{
    public function UserAuth(Request $request){
        $credencial = $request->only('email','password');
        $token = null;

        try {

            if (!$token = JWTAuth::attempt($credencial)){

                return response()->json(['error' => 'credeincial invalida']);
            }

        }catch (JWTException $ex){

            return response()->json(['error' => 'ocurrio algun error'], 500);
        }

            return response()->json(compact('token'));
    }
}
