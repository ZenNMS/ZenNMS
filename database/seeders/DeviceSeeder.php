<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert([
            [
                'hostname' => 'FWF-51E',
                'display_name' => 'FWF-51E',
                'ip_address' => '192.168.10.254',
                'ipv6_address' => null,
                'is_dynamic_ip' => false,
                'dns' => null,
                'group' => null,
                'type_id' => null,
                'vendor_id' => 12356,
                'asset_tag' => null,
                'is_rackable' => false,
                'polling_method' => 'SNMP',
                'sysDescr' => 'FWF-51e',
                'sysObjectID' => '.1.3.6.1.4.1.12356.101.1.516',
                'sysUpTime' => 29411318,
                'sysContact' => 'witigo@msn.com',
                'sysName' => 'FortiWiFi-51E',
                'sysLocation' => 'Palma de Mallorca',
                'sysServices' => 78,
                'status' => 1,
                'is_disabled' => false,
                'disabled_until' => null,
                'is_ignored' => false,
                'ignored_until' => null,
                'is_unmanaged' => false,
                'unmanaged_from' => null,
                'unmanaged_until' => null,
                'last_check' => null,
                'check_duration' => null,
                'next_check' => null,
                'last_discovery' => null,
                'discovery_duration' => null,
                'next_discovery' => null,
                'last_poll' => null,
                'poll_duration' => null,
                'next_poll' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'hostname' => 'ESPMI-WTG-SW01',
                'display_name' => 'ESPMI-WTG-SW01',
                'ip_address' => '192.168.10.252',
                'ipv6_address' => null,
                'is_dynamic_ip' => false,
                'dns' => null,
                'group' => null,
                'type_id' => null,
                'vendor_id' => 6468,
                'asset_tag' => null,
                'is_rackable' => false,
                'polling_method' => 'SNMP',
                'sysDescr' => 'FWF-51e',
                'sysObjectID' => '.1.3.6.1.4.1.12356.101.1.516',
                'sysUpTime' => 29411318,
                'sysContact' => 'witigo@msn.com',
                'sysName' => 'FortiWiFi-51E',
                'sysLocation' => 'Palma de Mallorca',
                'sysServices' => 78,
                'status' => 1,
                'is_disabled' => false,
                'disabled_until' => null,
                'is_ignored' => false,
                'ignored_until' => null,
                'is_unmanaged' => false,
                'unmanaged_from' => null,
                'unmanaged_until' => null,
                'last_check' => null,
                'check_duration' => null,
                'next_check' => null,
                'last_discovery' => null,
                'discovery_duration' => null,
                'next_discovery' => null,
                'last_poll' => null,
                'poll_duration' => null,
                'next_poll' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
