<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('racks')->insert([
            [
                'name' => 'Belkin RK1002',
                'display_name' => 'Belkin RK1002',
                'asset_tag' => 'belkin-rk1002',
                'serial_number' => '',
                'facility_id' => null,
                'group_id' => null,
                'role_id' => null,
                'type_id' => 3,
                'u_height' => 24,
                'order' => 'D',
                'outer_depth' => '1000',
                'outer_width' => '65',
                'notes' => null,
                'tags' => null,
            ]
        ]);
    }
}
