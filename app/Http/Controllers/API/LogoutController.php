<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class LogoutController extends Controller {
    public function __invoke(Request $request){
        auth('sanctum')->user()->currentAccessToken()->delete();


        return response()->json(['status' => true, 'user' => auth('sanctum')->user()->email,'message' =>'Success']);
    }
}
