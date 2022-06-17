<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permission = Permission::all()->toArray();
        dd($permission);
    }

    public function findPermission($key_name)
    {
        $permission = Permission::where('key_name',$key_name)->first()->toJson();
        dd($permission);
    }

    public function CreatePermission()
    {
        Permission::create([
           'name' => 'T.Docente',
           'key_name' => 'tdocente'
       ]);
    }

    public function UpdatePermission($id)
    {
        $permission = Permission::find($id);
        $permission->update([
           'name' => 'Tec.Docente',
           'key_name' => 'tec_docente'
       ]);
    }

    public function UpdatePermissionbyKeyName($key_name)
    {
        $permission = Permission::where('key_name',$key_name)->first();
        $permission->update([
           'name' => 'Tec.docente',
           'key_name' => 'tec_docente'
       ]);
    }
    public function DeletePermission($key_name)
    {
        $permission = Permission::where('key_name',$key_name)->first();
        $permission->delete();
    }
}
