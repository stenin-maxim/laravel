<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersRoles = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->select('users.id', 'users.name', 'roles.name as role')
            ->orderBy('users.id')
            ->distinct()
            ->get();

        return response()->json([
            'status' => true,
            'message' => 'Users found successfully',
            'data' => $usersRoles
        ], 200);
    }

    /**
     * Display the specified resource.
     * 
     * @param string $id
     */
    public function show(string $id)
    {
        $user = User::find($id);
        $roles = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->select('roles.name')
            ->where('users.id', $id)
            ->distinct()
            ->get();

        return response()->json([
            'status' => true,
            'message' => 'User found successfully',
            'data' => ['user' => $user, 'roles' => $roles]
        ], 200);
    }
}
