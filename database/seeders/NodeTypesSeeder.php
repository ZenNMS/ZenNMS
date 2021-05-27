<?php

namespace Database\Seeders;

use App\Enums\MessageSeverity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class NodeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('node_types')->insert([
            [
                'type' => 'Router',
                'icon' => '',
                'font_icon' => 'fa-router',
            ],
            [
                'type' => 'Firewall',
                'icon' => '',
                'font_icon' => 'fa-shield',
            ],
            [
                'type' => 'Switch',
                'icon' => '',
                'font_icon' => '',
            ],
            [
                'type' => 'Printer',
                'icon' => '',
                'font_icon' => 'fa-print',
            ],
            [
                'type' => 'Desktop',
                'icon' => '',
                'font_icon' => 'fa-desktop',
            ],
            [
                'type' => 'Laptop',
                'icon' => '',
                'font_icon' => 'fa-laptop',
            ],
            [
                'type' => 'Server',
                'icon' => '',
                'font_icon' => 'fa-server',
            ],
            [
                'type' => 'Wireless Lan Controller',
                'icon' => '',
                'font_icon' => '',
            ],
            [
                'type' => 'Wireless Access Point',
                'icon' => '',
                'font_icon' => 'fa-wifi',
            ],
            [
                'type' => 'OLT',
                'icon' => '',
                'font_icon' => '',
            ],
            [
                'type' => 'ONT',
                'icon' => '',
                'font_icon' => '',
            ],
            [
                'type' => 'PBX',
                'icon' => '',
                'font_icon' => '',
            ],
            [
                'type' => 'Wan Line',
                'icon' => '',
                'font_icon' => '',
            ],
            [
                'type' => 'Load Balancer',
                'icon' => '',
                'font_icon' => '',
            ],
            [
                'type' => '',
                'icon' => '',
                'font_icon' => '',
            ],
        ]);

        /**
         * Keep track of database seed
         */
        DB::table('events')->insert([
            'timestamp' => Carbon::now(),
            'entity' => 'SYSTEM',
            'entity_id' => null,
            'severity_code' => MessageSeverity::INFORMATIONAL,
            'severity_name' => MessageSeverity::SeverityName(MessageSeverity::INFORMATIONAL),
            'action' => 'DATABASE SEED',
            'message' => 'Table node_types has been seeded.',
        ]);
    }
}
