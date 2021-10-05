<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function index(Request $request){
        $districts = District::where('enabled', 1)->where('division_id', $request->division_id)->get();

        return response()->json($districts);
    }
}
