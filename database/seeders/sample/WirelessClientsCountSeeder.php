<?php

namespace Database\Seeders\sample;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WirelessClientsCountSeeder extends Seeder
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
                "wap_uuid" => "076d7039-80ba-4370-b4c0-64d1c325f415",
                "timestamp" => "2021-06-25 12:22:15",
                "associated" => 3,
                "active" => 3,
            ],
            [
                "wap_uuid" => "c635850c-71ea-4325-8cfe-4d834f69f973",
                "timestamp" => "2021-06-25 12:22:15",
                "associated" => 2,
                "active" => 2,
            ],
        ];

        DB::table('wireless_access_point_client_statistics')->insert($records);
    }
}
