<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
class Controller extends BaseController
{
    public function respondWithToken($token)
    {
        
        return response()->json([
            'token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => null
        ], 200);
    }
}
