<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceTypesSeeder extends Seeder
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
                'type'      => 'Router',
                'icon'      => '',
                'font_icon' => 'fa-router',
            ],
            [
                'type'      => 'Firewall',
                'icon'      => '',
                'font_icon' => 'fa-shield',
            ],
            [
                'type'      => 'Switch',
                'icon'      => '',
                'font_icon' => '',
            ],
            [
                'type'      => 'Printer',
                'icon'      => '',
                'font_icon' => 'fa-print',
            ],
            [
                'type'      => 'Desktop',
                'icon'      => '',
                'font_icon' => 'fa-desktop',
            ],
            [
                'type'      => 'Laptop',
                'icon'      => '',
                'font_icon' => 'fa-laptop',
            ],
            [
                'type'      => 'Server',
                'icon'      => '',
                'font_icon' => 'fa-server',
            ],
            [
                'type'      => 'Wireless Lan Controller',
                'icon'      => '',
                'font_icon' => '',
            ],
            [
                'type'      => 'Wireless Access Point',
                'icon'      => '',
                'font_icon' => 'fa-wifi',
            ],
            [
                'type'      => 'OLT',
                'icon'      => '',
                'font_icon' => '',
            ],
            [
                'type'      => 'ONT',
                'icon'      => '',
                'font_icon' => 'fa-router',
            ],
            [
                'type'      => 'PBX',
                'icon'      => '',
                'font_icon' => '',
            ],
            [
                'type'      => 'Wan Line',
                'icon'      => '',
                'font_icon' => '',
            ],
            [
                'type'      => 'Load Balancer',
                'icon'      => '',
                'font_icon' => '',
            ],
        ];

        DB::table('device_types')->insert($records);
    }
}
