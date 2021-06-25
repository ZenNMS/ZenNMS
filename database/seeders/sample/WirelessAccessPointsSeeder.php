<?php

namespace Database\Seeders\sample;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WirelessAccessPointsSeeder extends Seeder
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
                "device_id" => 3,
                "index" => "164.136.115.62.14.64",
                "wap_uuid" => "076d7039-80ba-4370-b4c0-64d1c325f415",
                "name" => "APA488.733C.01C8",
                "physical_address" => "A4:88:73:3C:01:C8",
                "location" => "Palma",
                "admin_status" => 1,
                "led_status" => 1,
                "power_status" => 4,
                "model" => "CBW140AC-E",
                "serial_number" => "FGL2438L7WL",
                "ip_address" => "192.168.10.250",
                "netmask" => "255.255.255.0",
                "gateway" => "192.168.10.254",
                "boot_version" => "1.1.2.4",
                "ios_version" => "10.4.1.0",
                "software_version" => "10.4.1.0",
                "uptime" => 55749169,
                "wapp_uptime" => 55730870,
                "wapp_join_uptime" => 18200,
                "max_client_limit" => 200,
                "service_ssh_enabled" => 1,
                "service_telnet_enabled" => 2,
            ],
            [
                "device_id" => 3,
                "index" => "164.136.115.62.167.64",
                "wap_uuid" => "c635850c-71ea-4325-8cfe-4d834f69f973",
                "name" => "APA488.733C.14EC",
                "physical_address" => "A4:88:73:3C:14:EC",
                "location" => "Habitaciones",
                "admin_status" => 1,
                "led_status" => 1,
                "power_status" => 4,
                "model" => "CBW140AC-E",
                "serial_number" => "FGL2446L89P",
                "ip_address" => "192.168.10.211",
                "netmask" => "255.255.255.0",
                "gateway" => "192.168.10.254",
                "boot_version" => "1.1.2.4",
                "ios_version" => "10.4.1.0",
                "software_version" => "10.4.1.0",
                "uptime" => 55749069,
                "wapp_uptime" => 55731970,
                "wapp_join_uptime" => 17000,
                "max_client_limit" => 200,
                "service_ssh_enabled" => 1,
                "service_telnet_enabled" => 2,
            ],
        ];

        DB::table('wireless_access_points')->insert($records);
    }
}
