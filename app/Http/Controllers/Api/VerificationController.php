<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class VerificationController extends Controller
{
    public function verify(Request $request){
        $person = Person::where('id_no', $request->id)->first();

        return $person;
    }
}
