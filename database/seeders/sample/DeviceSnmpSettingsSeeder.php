<?php

namespace Database\Seeders\sample;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSnmpSettingsSeeder extends Seeder
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
            ],
            [
                'device_id' => 2,
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
            ],
            [
                'device_id' => 3,
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
            ],
        ];

        DB::table('device_snmp_settings')->insert($records);
    }
}
