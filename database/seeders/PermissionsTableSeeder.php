<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'pendonor_access',
            ],
            [
                'id'    => 2,
                'title' => 'pasien_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
