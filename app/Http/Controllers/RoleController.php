<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return response()->json(Role::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string']);
        $role = Role::create($request->all());
        return response()->json($role, 201);
    }

    public function show($id)
    {
        $role = Role::find($id);
        if (!$role) return response()->json(['message' => 'Role not found'], 404);
        return response()->json($role, 200);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        if (!$role) return response()->json(['message' => 'Role not found'], 404);
        $role->update($request->all());
        return response()->json($role, 200);
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        if (!$role) return response()->json(['message' => 'Role not found'], 404);
        $role->delete();
        return response()->json(['message' => 'Role deleted'], 204);
    }
}
