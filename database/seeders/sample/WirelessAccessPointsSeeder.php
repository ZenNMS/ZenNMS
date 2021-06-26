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
                'device_id' => 3,
                'index' => '164.136.115.62.14.64',
                'entity_index' => 16,
                'wap_uuid' => '9cf7f88e-20fd-4106-8413-c595633517f5',
                'name' => 'APA488.733C.01C8',
                'physical_address' => 'A4:88:73:3C:01:C8',
                'location' => 'Palma',
                'admin_status' => 1,
                'led_status' => 1,
                'power_status' => 4,
                'model' => 'CBW140AC-E',
                'serial_number' => 'FGL2438L7WL',
                'ip_address' => '192.168.10.250',
                'netmask' => '255.255.255.0',
                'gateway' => '192.168.10.254',
                'network_spectrum_interface' => '447CECF9775D0E27AED716A1867A145B',
                'boot_version' => '1.1.2.4',
                'ios_version' => '10.4.1.0',
                'software_version' => '10.4.1.0',
                'uptime' => 59908655,
                'wapp_uptime' => 59890356,
                'wapp_join_uptime' => 18200,
                'max_client_limit' => 200,
                'service_ssh_enabled' => 1,
                'service_telnet_enabled' => 2,
            ],
            [
                'device_id' => 3,
                'index' => '164.136.115.62.167.64',
                'entity_index' => 8,
                'wap_uuid' => 'edce05d6-2af9-4320-a695-b82b15935b7d',
                'name' => 'APA488.733C.14EC',
                'physical_address' => 'A4:88:73:3C:14:EC',
                'location' => 'Habitaciones',
                'admin_status' => 1,
                'led_status' => 1,
                'power_status' => 4,
                'model' => 'CBW140AC-E',
                'serial_number' => 'FGL2446L89P',
                'ip_address' => '192.168.10.211',
                'netmask' => '255.255.255.0',
                'gateway' => '192.168.10.254',
                'network_spectrum_interface' => '92952FF6113569D8C54FC19F35012165',
                'boot_version' => '1.1.2.4',
                'ios_version' => '10.4.1.0',
                'software_version' => '10.4.1.0',
                'uptime' => 59908555,
                'wapp_uptime' => 59891456,
                'wapp_join_uptime' => 17000,
                'max_client_limit' => 200,
                'service_ssh_enabled' => 1,
                'service_telnet_enabled' => 2,
            ],
        ];

        DB::table('wireless_access_points')->insert($records);
    }
}
