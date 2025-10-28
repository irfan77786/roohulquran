<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->latest()->paginate(15);
        $permissions = Permission::all()->groupBy('module');
        return view('admin.roles.index', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'permissions' => 'nullable|array',
            'permissions.*' => 'exists:permissions,id'
        ]);

        $role = Role::create(['name' => $validated['name']]);

        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        }

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Role created successfully']);
        }

        return redirect()->route('admin.roles.index')->with('success', 'Role created successfully');
    }

    public function update(Request $request, Role $role)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id,
            'permissions' => 'nullable|array',
            'permissions.*' => 'exists:permissions,id'
        ]);

        $role->update(['name' => $validated['name']]);

        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        } else {
            $role->syncPermissions([]);
        }

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Role updated successfully']);
        }

        return redirect()->route('admin.roles.index')->with('success', 'Role updated successfully');
    }

    public function destroy(Role $role)
    {
        // Don't allow deleting super admin role
        if ($role->name === 'super-admin') {
            return response()->json(['success' => false, 'message' => 'Cannot delete super admin role']);
        }

        $role->delete();

        return response()->json(['success' => true, 'message' => 'Role deleted successfully']);
    }
}
