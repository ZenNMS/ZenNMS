<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ChecksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date_time = Carbon::now();

        $records = [
            [
                'name'       => 'ICMP status check',
                'class_name' => '',
                'is_custom'  => false,
                'created_at' => $date_time,
                'updated_at' => $date_time,
            ],
            [
                'name'       => 'HTTP status check',
                'class_name' => '',
                'is_custom'  => false,
                'created_at' => $date_time,
                'updated_at' => $date_time,
            ],
            [
                'name'       => 'SNMP status check',
                'class_name' => '',
                'is_custom'  => false,
                'created_at' => $date_time,
                'updated_at' => $date_time,
            ],
            [
                'name'       => 'SNMP discovery',
                'class_name' => '',
                'is_custom'  => false,
                'created_at' => $date_time,
                'updated_at' => $date_time,
            ],
        ];

        DB::table('checks')->insert($records);
    }
}
