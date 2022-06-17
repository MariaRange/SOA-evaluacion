<?php

namespace App\Http\Controllers;
use App\Models\Permisos;

use Illuminate\Http\Request;

class PermisosController extends Controller
{
    public function index()
    {
        $permisos = Permisos::all()->toArray();
        dd($permisos);
    }

    public function findPermiso($key_name)
    {
        $permisos = Permisos::where('key_name',$key_name)->first()->toJson();
        dd($permisos);
    }
}
