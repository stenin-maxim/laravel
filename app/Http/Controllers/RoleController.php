<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();

        return response()->json([
            'status' => true,
            'message' => 'Roles found successfully',
            'data' => $roles
        ], 200);
    }

    /**
     * Display the specified resource.
     * 
     * @param string $id
     */
    public function show(string $id)
    {
        $role = Role::find($id);
        $users = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->select('users.id', 'users.name')
            ->where('roles.id', $id)
            ->orderBy('users.id')
            ->get();

        return response()->json([
            'status' => true,
            'message' => 'Role found successfully',
            'data' => ['role' => $role, 'users' => $users],
        ], 200);
    }
}
