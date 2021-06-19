<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device_settings')->insert([
            'device_id' => 1,
            'icmp_count' => 5,
            'icmp_retries' => 3,
            'icmp_timeout' => 100,
            'snmp_rediscovery_interval' => 1440,
            'snmp_poll_interval' => 5,
            'snmp_use_64_bit_counters' => true,
            'snmp_version' => 'v2c',
            'snmp_port' => 161,
            'snmp_retries' => 3,
            'snmp_timeout' => 10,
            'snmp_read_community' => 'csnmpv2c',
            'snmp_write_community' => null,
            'snmp_auth_level' => null,
            'snmp_auth_name' => null,
            'snmp_authentication_protocol' => null,
            'snmp_authentication_password' => null,
            'snmp_privacy_protocol' => null,
            'snmp_privacy_password' => null,
            'keep_detailed_history' => false,
            'keep_trends_history' => false,
        ]);
    }
}
