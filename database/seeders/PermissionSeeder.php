<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [

            // USER
            'user.view',
            'user.create',
            'user.edit',
            'user.delete',

            // ROLE
            'role.view',
            'role.create',
            'role.edit',
            'role.delete',

            // PERMISSION
            'permission.view',
            'permission.create',
            'permission.edit',
            'permission.delete',

            // PENGAJUAN
            'pengajuan.view',
            'pengajuan.create',
            'pengajuan.edit',
            'pengajuan.approve',
            'pengajuan.reject',

            // KARTU SAMPAH
            'kartu.view',
            'kartu.create',
            'kartu.print',

            // LAPORAN
            'laporan.view',
            'laporan.print',
        ];

        foreach ($permissions as $permission) {

            Permission::firstOrCreate([
                'name' => $permission
            ]);

        }
    }
}