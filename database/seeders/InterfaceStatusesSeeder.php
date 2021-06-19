<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterfaceStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            [
                'id'     => 1,
                'status' => 'up',
            ],
            [
                'id'     => 2,
                'status' => 'down',
            ],
            [
                'id'     => 3,
                'status' => 'testing',
            ],
            [
                'id'     => 4,
                'status' => 'unknown',
            ],
            [
                'id'     => 5,
                'status' => 'dormant',
            ],
            [
                'id'     => 6,
                'status' => 'not present',
            ],
            [
                'id'     => 7,
                'status' => 'low layer down',
            ],
        ];

        DB::table('interface_statuses')->insert($records);
    }
}
