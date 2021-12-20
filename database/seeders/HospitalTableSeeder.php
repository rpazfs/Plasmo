<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
\DB::table('hospital')->insert([
    'id' => 1,
    'name' => 'Dana',
    'address' => 'Malang',
    'hotline' => '081216195308'
        ]);
    }
}
