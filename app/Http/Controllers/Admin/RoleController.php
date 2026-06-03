<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->get();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name'
        ]);

        Role::create([
            'name' => $request->name
        ]);

        return redirect()
            ->route('admin.roles.index')
            ->with('success','Role berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $role = Role::findOrFail($id);

        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, string $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id
        ]);

        $role->update([
            'name' => $request->name
        ]);

        return redirect()
            ->route('admin.roles.index')
            ->with('success','Role berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        return redirect()
            ->route('admin.roles.index')
            ->with('success','Role berhasil dihapus');
    }

    public function permissions(Role $role)
{
    $permissions = Permission::all();

    return view(
        'admin.roles.permissions',
        compact('role', 'permissions')
    );
}

public function syncPermissions(
    Request $request,
    Role $role
)
{
    $role->permissions()->sync(
        $request->permissions ?? []
    );

    return redirect()
        ->route('admin.roles.index')
        ->with(
            'success',
            'Permission berhasil disimpan'
        );
}

}