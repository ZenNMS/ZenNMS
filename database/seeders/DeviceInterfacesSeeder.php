<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceInterfacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interfaces = [
            [
                "device_id" => 1,
                "index" => 1,
                "name" => "wan1",
                "alias" => "",
                "description" => "",
                "type_id" => 6,
                "speed" => 1000,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:5B",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 2,
                "name" => "wan2",
                "alias" => "",
                "description" => "",
                "type_id" => 6,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:5C",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 2,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 3,
                "name" => "modem",
                "alias" => "",
                "description" => "",
                "type_id" => 6,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "00:00:00:00:00:00",
                "link_up_down_trap" => 1,
                "admin_status" => 2,
                "operational_status" => 2,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 4,
                "name" => "ssl.root",
                "alias" => "SSL VPN interface",
                "description" => "",
                "type_id" => 131,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 5,
                "name" => "lan1",
                "alias" => "",
                "description" => "",
                "type_id" => 6,
                "speed" => 1000,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:5D",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 6,
                "name" => "wifi",
                "alias" => "",
                "description" => "",
                "type_id" => 1,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 7,
                "name" => "internal",
                "alias" => "",
                "description" => "",
                "type_id" => 209,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 8,
                "name" => "wqtn.6.wifi",
                "alias" => "",
                "description" => "Quarantine VLAN",
                "type_id" => 135,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "00:FF:73:1F:1F:0E",
                "link_up_down_trap" => 1,
                "admin_status" => 2,
                "operational_status" => 2,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 9,
                "name" => "wqt.root",
                "alias" => "",
                "description" => "Quarantine Soft Switch",
                "type_id" => 209,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 10,
                "name" => "lan2",
                "alias" => "",
                "description" => "",
                "type_id" => 6,
                "speed" => 1000,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:5E",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 11,
                "name" => "lan3",
                "alias" => "",
                "description" => "",
                "type_id" => 6,
                "speed" => 10,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:5F",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 2,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 12,
                "name" => "lan4",
                "alias" => "",
                "description" => "",
                "type_id" => 6,
                "speed" => 10,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:60",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 2,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 13,
                "name" => "lan5",
                "alias" => "",
                "description" => "",
                "type_id" => 6,
                "speed" => 10,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:61",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 2,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 14,
                "name" => "vpn_ipsec",
                "alias" => "",
                "description" => "",
                "type_id" => 131,
                "speed" => 1000,
                "mtu" => 1500,
                "physical_address" => "",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 15,
                "name" => "gwifi",
                "alias" => "google wifi",
                "description" => "",
                "type_id" => 135,
                "speed" => 1000,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:5D",
                "link_up_down_trap" => 1,
                "admin_status" => 2,
                "operational_status" => 2,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 16,
                "name" => "netmgmt",
                "alias" => "NetManagement",
                "description" => "",
                "type_id" => 135,
                "speed" => 1000,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:5D",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 17,
                "name" => "users",
                "alias" => "users",
                "description" => "",
                "type_id" => 135,
                "speed" => 1000,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:5D",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 18,
                "name" => "netlab",
                "alias" => "netlab",
                "description" => "",
                "type_id" => 135,
                "speed" => 1000,
                "mtu" => 1500,
                "physical_address" => "90:6C:AC:62:82:5E",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 19,
                "name" => "WTG-FAP221C-5G",
                "alias" => "",
                "description" => "",
                "type_id" => 1,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 20,
                "name" => "wqtn.19.WTG-FAP",
                "alias" => "",
                "description" => "Quarantine VLAN",
                "type_id" => 135,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "00:FF:67:7E:C1:3D",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 21,
                "name" => "WTG-FAP221C-2G",
                "alias" => "",
                "description" => "",
                "type_id" => 1,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
            [
                "device_id" => 1,
                "index" => 22,
                "name" => "wqtn.21.WTG-FAP",
                "alias" => "",
                "description" => "Quarantine VLAN",
                "type_id" => 135,
                "speed" => 0,
                "mtu" => 1500,
                "physical_address" => "00:FF:74:C6:54:2E",
                "link_up_down_trap" => 1,
                "admin_status" => 1,
                "operational_status" => 1,
                "last_change" => 0,
            ],
        ];

        DB::table('device_interfaces')->insert($interfaces);
    }
}
