<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upazila;

class UpazilaController extends Controller
{
    public function index(Request $request){
        $upazilas = Upazila::where('enabled', 1)->where('district_id', $request->district_id)->get();

        return response()->json($upazilas);
    }
}
