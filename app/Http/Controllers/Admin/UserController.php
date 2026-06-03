<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role_id' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil ditambahkan');
    }

    public function edit(string $id)
{
    $user = User::findOrFail($id);

    $roles = Role::all();

    return view(
        'admin.users.edit',
        compact('user', 'roles')
    );
}

    public function update(Request $request, string $id)
{
    $user = User::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'role_id' => 'required'
    ]);

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'role_id' => $request->role_id,
    ]);

    return redirect()
        ->route('admin.users.index')
        ->with('success', 'User berhasil diupdate');
}

public function destroy(string $id)
{
    $user = User::findOrFail($id);

    // Mencegah admin menghapus dirinya sendiri
    if ($user->id == auth()->id()) {
        return redirect()
            ->route('admin.users.index')
            ->with('error', 'Anda tidak dapat menghapus akun sendiri');
    }

    $user->delete();

    return redirect()
        ->route('admin.users.index')
        ->with('success', 'User berhasil dihapus');
}

}