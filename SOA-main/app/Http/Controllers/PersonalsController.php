<?php

namespace App\Http\Controllers;
use App\Models\Personal;

use Illuminate\Http\Request;

class PersonalsController extends Controller
{
    public function index()
    {
        $personals = Personal::all()->toArray();
        dd($personals);
    }

    public function findPersonal($key_name)
    {
        $personals = Personal::where('key_name',$key_name)->first()->toJson();
        dd($personals);
    }
}
