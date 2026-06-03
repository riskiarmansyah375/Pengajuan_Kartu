<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::latest()->get();

        return view(
            'admin.permissions.index',
            compact('permissions')
        );
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name'
        ]);

        Permission::create([
            'name' => $request->name
        ]);

        return redirect()
            ->route('admin.permissions.index')
            ->with('success', 'Permission berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $permission = Permission::findOrFail($id);

        return view(
            'admin.permissions.edit',
            compact('permission')
        );
    }

    public function update(Request $request, string $id)
    {
        $permission = Permission::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:permissions,name,' . $permission->id
        ]);

        $permission->update([
            'name' => $request->name
        ]);

        return redirect()
            ->route('admin.permissions.index')
            ->with('success', 'Permission berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $permission = Permission::findOrFail($id);

        $permission->delete();

        return redirect()
            ->route('admin.permissions.index')
            ->with('success', 'Permission berhasil dihapus');
    }
}