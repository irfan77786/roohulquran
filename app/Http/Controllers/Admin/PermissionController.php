<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all()->groupBy('module');
        return view('admin.permissions.index', compact('permissions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name',
            'module' => 'required|string|max:255',
            'description' => 'nullable|string|max:500'
        ]);

        Permission::create($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Permission created successfully']);
        }

        return redirect()->route('admin.permissions.index')->with('success', 'Permission created successfully');
    }

    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name,' . $permission->id,
            'module' => 'required|string|max:255',
            'description' => 'nullable|string|max:500'
        ]);

        $permission->update($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Permission updated successfully']);
        }

        return redirect()->route('admin.permissions.index')->with('success', 'Permission updated successfully');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();

        return response()->json(['success' => true, 'message' => 'Permission deleted successfully']);
    }
}
