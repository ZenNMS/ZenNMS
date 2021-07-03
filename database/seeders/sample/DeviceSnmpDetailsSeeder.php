<?php

namespace Database\Seeders\sample;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSnmpDetailsSeeder extends Seeder
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
                'device_id'     => 1,
                'sys_descr'     => 'FWF-51e',
                'sys_object_id' => '.1.3.6.1.4.1.12356.101.1.516',
                'sys_uptime'    => 29411318,
                'sys_contact'   => 'witigo@msn.com',
                'sys_name'      => 'FortiWiFi-51E',
                'sys_location'  => 'Palma de Mallorca',
                'sys_services'  => 78,
            ],
            [
                'device_id'     => 2,
                'sys_descr'     => 'Alcatel-Lucent Enterprise OS6450-P24 6.7.2.191.R04 GA, June 20, 2018.',
                'sys_object_id' => '.1.3.6.1.4.1.6486.800.1.1.2.1.12.1.6',
                'sys_uptime'    => 20531300,
                'sys_contact'   => 'witigo@msn.com',
                'sys_name'      => 'ESPMI-WTG-SW01',
                'sys_location'  => 'Palma de Mallorca',
                'sys_services'  => 78,
            ],
            [
                'device_id'     => 3,
                'sys_descr'     => 'Cisco Controller',
                'sys_object_id' => '.1.3.6.1.4.1.9.1.2489',
                'sys_uptime'    => 8244900,
                'sys_contact'   => 'witigo@msn.com',
                'sys_name'      => 'CBW140AC-WAP01',
                'sys_location'  => 'Palma de Mallorca',
                'sys_services'  => 2,
            ],
            [
                'device_id'     => 4,
                'sys_descr'     => 'HP ETHERNET MULTI-ENVIRONMENT,SN:CNSJR24985,FN:HA51VSB,SVCID:17164,PID:HP LaserJet 3390',
                'sys_object_id' => '.1.3.6.1.4.1.11.1',
                'sys_uptime'    => 441196,
                'sys_contact'   => 'witigo@msn.com',
                'sys_name'      => 'NPI1F2FBA',
                'sys_location'  => 'HP LaserJet 3390',
                'sys_services'  => 72,
            ],
            [
                'device_id'     => 6,
                'sys_descr'     => '; AXIS M3113; Network Camera; 5.51.7.4; Apr 13 2021 13:28; 179; 1;',
                'sys_object_id' => '.1.3.6.1.4.1.368',
                'sys_uptime'    => 74800,
                'sys_contact'   => '',
                'sys_name'      => '',
                'sys_location'  => '',
                'sys_services'  => 64,
            ],
            [
                'device_id'     => 7,
                'sys_descr'     => '; AXIS M3113; Network Camera; 5.51.7.4; Apr 13 2021 13:28; 179; 1;',
                'sys_object_id' => '.1.3.6.1.4.1.368',
                'sys_uptime'    => 74800,
                'sys_contact'   => '',
                'sys_name'      => '',
                'sys_location'  => '',
                'sys_services'  => 64,
            ],
        ];

        DB::table('device_snmp_details')->insert($records);
    }
}
