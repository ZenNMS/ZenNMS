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
                'wap_uuid'   => '9cf7f88e-20fd-4106-8413-c595633517f5',
                'timestamp'  => '2021-06-25 12:22:15',
                'associated' => 3,
                'active'     => 3,
            ],
            [
                'wap_uuid'   => 'edce05d6-2af9-4320-a695-b82b15935b7d',
                'timestamp'  => '2021-06-25 12:22:15',
                'associated' => 2,
                'active'     => 2,
            ],
        ];

        DB::table('wireless_access_point_client_statistics')->insert($records);
    }
}
