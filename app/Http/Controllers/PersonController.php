<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index(){
        $persons = Person::paginate();
        return view('persons.index', ['persons' => $persons]);
    }
}
