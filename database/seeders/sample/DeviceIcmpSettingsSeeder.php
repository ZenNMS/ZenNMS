<?php

namespace Database\Seeders\sample;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceIcmpSettingsSeeder extends Seeder
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
                'device_id' => 1,
                'icmp_count' => 5,
                'icmp_retries' => 3,
                'icmp_timeout' => 100,
            ],
            [
                'device_id' => 2,
                'icmp_count' => 5,
                'icmp_retries' => 3,
                'icmp_timeout' => 100,
            ],
            [
                'device_id' => 3,
                'icmp_count' => 5,
                'icmp_retries' => 3,
                'icmp_timeout' => 100,
            ],
            [
                'device_id' => 4,
                'icmp_count' => 5,
                'icmp_retries' => 3,
                'icmp_timeout' => 100,
            ],
            [
                'device_id' => 5,
                'icmp_count' => 5,
                'icmp_retries' => 3,
                'icmp_timeout' => 100,
            ],
            [
                'device_id' => 6,
                'icmp_count' => 5,
                'icmp_retries' => 3,
                'icmp_timeout' => 100,
            ],
            [
                'device_id' => 7,
                'icmp_count' => 5,
                'icmp_retries' => 3,
                'icmp_timeout' => 100,
            ],
        ];

        DB::table('device_icmp_settings')->insert($records);
    }
}
