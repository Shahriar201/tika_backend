<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vaccination_Center;

class VaccinationCenterController extends Controller
{
    public function index(Request $request){
        $centers = Vaccination_Center::where('enabled', 1)->where('upazila_id', $request->upazila_id)->get();

        return response()->json($centers);
    }
}
