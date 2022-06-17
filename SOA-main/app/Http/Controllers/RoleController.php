<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all()->toArray();
        dd($roles);
    }

    public function findRole($key_name)
    {
        $role = Role::where('key_name',$key_name)->first()->toJson();
        dd($role);
    }

    public function CreateRole()
    {
       Role::create([
           'name' => 'T.Docente',
           'key_name' => 'tdocente'
       ]);
    }

    public function UpdateRole($id)
    {
        $role = Role::find($id);
        $role->update([
           'name' => 'Tec.Docente',
           'key_name' => 'tec_docente'
       ]);
    }

    public function UpdateRolebyKeyName($key_name)
    {
        $role = Role::where('key_name',$key_name)->first();
        $role->update([
           'name' => 'Tec.docente',
           'key_name' => 'tec_docente'
       ]);
    }
    public function DeleteRole($key_name)
    {
        $role = Role::where('key_name',$key_name)->first();
        $role->delete();
    }
}
