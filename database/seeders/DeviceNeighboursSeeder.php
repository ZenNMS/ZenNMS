<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceNeighboursSeeder extends Seeder
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
                "device_id" => 1,
                "time_mark" => 1005696355,
                "local_port_number" => 10,
                "index" => 1,
                "chassis_id_subtype" => 4,
                "chassis_id" => "2C:FA:A2:27:2F:5C",
                "port_id_subtype" => 7,
                "port_id" => 1021,
                "port_description" => "Alcatel-Lucent Enterprise 1/21",
                "sys_name" => "WTG-OS6450P24-SW01",
                "sys_description" => "Alcatel-Lucent Enterprise OS6450-P24 6.7.2.191.R04 GA, June 20, 2018.",
            ],
            [
                "device_id" => 2,
                "time_mark" => 0,
                "local_port_number" => 0,
                "index" => 0,
                "chassis_id_subtype" => 4,
                "chassis_id" => "a4:88:73:3c:14:ec",
                "port_id_subtype" => 1,
                "port_id" => 0,
                "port_description" => "eth0",
                "sys_name" => "APA488.733C.14EC",
                "sys_description" => "Cisco AP Software, ap1g5-k9w8 Version: 10.4.1.0 Technical Support: http://www.cisco.com/techsupport Copyright (c) 1986-2021 by Cisco Systems, Inc. Compiled Mon Mar 15 15:26:19 GMT 2021 by aut",
            ],
            [
                "device_id" => 2,
                "time_mark" => 0,
                "local_port_number" => 0,
                "index" => 0,
                "chassis_id_subtype" => 4,
                "chassis_id" => "a4:88:73:3c:01:c8",
                "port_id_subtype" => 1,
                "port_id" => 0,
                "port_description" => "eth0",
                "sys_name" => "APA488.733C.01C8",
                "sys_description" => "Cisco AP Software, ap1g5-k9w8 Version: 10.4.1.0 Technical Support: http://www.cisco.com/techsupport Copyright (c) 1986-2021 by Cisco Systems, Inc. Compiled Mon Mar 15 15:26:19 GMT 2021 by aut",
            ],
            [
                "device_id" => 2,
                "time_mark" => 0,
                "local_port_number" => 0,
                "index" => 0,
                "chassis_id_subtype" => 4,
                "chassis_id" => "2c:4d:54:52:74:a7",
                "port_id_subtype" => 3,
                "port_id" => 2,
                "port_description" => "",
                "sys_name" => "",
                "sys_description" => "",
            ],
            [
                "device_id" => 2,
                "time_mark" => 0,
                "local_port_number" => 0,
                "index" => 0,
                "chassis_id_subtype" => 4,
                "chassis_id" => "90:6c:ac:62:82:5d",
                "port_id_subtype" => 3,
                "port_id" => 90,
                "port_description" => "",
                "sys_name" => "FortiWiFi-51E",
                "sys_description" => "FortiWiFi-51E v6.2.3,build1066,191218 (GA)",
            ],
        ];

        DB::table('device_lldp_neighbours')->insert($records);
    }
}
