<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Pendonor',
            ],
            [
                'id'    => 2,
                'title' => 'Pasien',
            ],
        ];

        Role::insert($roles);
    }
}
