<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;

class DivisionController extends Controller
{
    public function index(){
        $divisions = Division::where('enabled', 1)->get();

        return response()->json($divisions);
    }
}
