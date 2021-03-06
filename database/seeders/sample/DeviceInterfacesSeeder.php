<?php

namespace Database\Seeders\sample;

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
                'device_id' => 1,
                'index' => 1,
                'name' => 'wan1',
                'alias' => '',
                'description' => '',
                'type_id' => 6,
                'speed' => 1000,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:5B',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 2,
                'name' => 'wan2',
                'alias' => '',
                'description' => '',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:5C',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 3,
                'name' => 'modem',
                'alias' => '',
                'description' => '',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '00:00:00:00:00:00',
                'link_up_down_trap' => 1,
                'admin_status' => 2,
                'operational_status' => 2,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 4,
                'name' => 'ssl.root',
                'alias' => 'SSL VPN interface',
                'description' => '',
                'type_id' => 131,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 5,
                'name' => 'lan1',
                'alias' => '',
                'description' => '',
                'type_id' => 6,
                'speed' => 1000,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:5D',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 6,
                'name' => 'wifi',
                'alias' => '',
                'description' => '',
                'type_id' => 1,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 7,
                'name' => 'internal',
                'alias' => '',
                'description' => '',
                'type_id' => 209,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 8,
                'name' => 'wqtn.6.wifi',
                'alias' => '',
                'description' => 'Quarantine VLAN',
                'type_id' => 135,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '00:FF:73:1F:1F:0E',
                'link_up_down_trap' => 1,
                'admin_status' => 2,
                'operational_status' => 2,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 9,
                'name' => 'wqt.root',
                'alias' => '',
                'description' => 'Quarantine Soft Switch',
                'type_id' => 209,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 10,
                'name' => 'lan2',
                'alias' => '',
                'description' => '',
                'type_id' => 6,
                'speed' => 1000,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:5E',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 11,
                'name' => 'lan3',
                'alias' => '',
                'description' => '',
                'type_id' => 6,
                'speed' => 10,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:5F',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 12,
                'name' => 'lan4',
                'alias' => '',
                'description' => '',
                'type_id' => 6,
                'speed' => 10,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:60',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 13,
                'name' => 'lan5',
                'alias' => '',
                'description' => '',
                'type_id' => 6,
                'speed' => 10,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:61',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 14,
                'name' => 'vpn_ipsec',
                'alias' => '',
                'description' => '',
                'type_id' => 131,
                'speed' => 1000,
                'mtu' => 1500,
                'physical_address' => '',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 15,
                'name' => 'gwifi',
                'alias' => 'google wifi',
                'description' => '',
                'type_id' => 135,
                'speed' => 1000,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:5D',
                'link_up_down_trap' => 1,
                'admin_status' => 2,
                'operational_status' => 2,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 16,
                'name' => 'netmgmt',
                'alias' => 'NetManagement',
                'description' => '',
                'type_id' => 135,
                'speed' => 1000,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:5D',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 17,
                'name' => 'users',
                'alias' => 'users',
                'description' => '',
                'type_id' => 135,
                'speed' => 1000,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:5D',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 18,
                'name' => 'netlab',
                'alias' => 'netlab',
                'description' => '',
                'type_id' => 135,
                'speed' => 1000,
                'mtu' => 1500,
                'physical_address' => '90:6C:AC:62:82:5E',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 19,
                'name' => 'WTG-FAP221C-5G',
                'alias' => '',
                'description' => '',
                'type_id' => 1,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 20,
                'name' => 'wqtn.19.WTG-FAP',
                'alias' => '',
                'description' => 'Quarantine VLAN',
                'type_id' => 135,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '00:FF:67:7E:C1:3D',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 21,
                'name' => 'WTG-FAP221C-2G',
                'alias' => '',
                'description' => '',
                'type_id' => 1,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 1,
                'index' => 22,
                'name' => 'wqtn.21.WTG-FAP',
                'alias' => '',
                'description' => 'Quarantine VLAN',
                'type_id' => 135,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '00:FF:74:C6:54:2E',
                'link_up_down_trap' => 1,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 2,
                'index' => 1001,
                'name' => '1/1',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/1',
                'type_id' => 6,
                'speed' => 1000,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:5E',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 27300,
            ],
            [
                'device_id' => 2,
                'index' => 1002,
                'name' => '1/2',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/2',
                'type_id' => 6,
                'speed' => 1000,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:5F',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 27400,
            ],
            [
                'device_id' => 2,
                'index' => 1003,
                'name' => '1/3',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/3',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:60',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1004,
                'name' => '1/4',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/4',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:61',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1005,
                'name' => '1/5',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/5',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:62',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1006,
                'name' => '1/6',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/6',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:63',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1007,
                'name' => '1/7',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/7',
                'type_id' => 6,
                'speed' => 1000,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:64',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 13000,
            ],
            [
                'device_id' => 2,
                'index' => 1008,
                'name' => '1/8',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/8',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:65',
                'link_up_down_trap' => false,
                'admin_status' => 2,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1009,
                'name' => '1/9',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/9',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:66',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1010,
                'name' => '1/10',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/10',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:67',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1011,
                'name' => '1/11',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/11',
                'type_id' => 6,
                'speed' => 1000,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:68',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 12900,
            ],
            [
                'device_id' => 2,
                'index' => 1012,
                'name' => '1/12',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/12',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:69',
                'link_up_down_trap' => false,
                'admin_status' => 2,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1013,
                'name' => '1/13',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/13',
                'type_id' => 6,
                'speed' => 1000,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:6A',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 1522900,
            ],
            [
                'device_id' => 2,
                'index' => 1014,
                'name' => '1/14',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/14',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:6B',
                'link_up_down_trap' => false,
                'admin_status' => 2,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1015,
                'name' => '1/15',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/15',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:6C',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1016,
                'name' => '1/16',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/16',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:6D',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1017,
                'name' => '1/17',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/17',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:6E',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1018,
                'name' => '1/18',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/18',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:6F',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1019,
                'name' => '1/19',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/19',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:70',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1020,
                'name' => '1/20',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/20',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:71',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1021,
                'name' => '1/21',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/21',
                'type_id' => 6,
                'speed' => 1000,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:72',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 12800,
            ],
            [
                'device_id' => 2,
                'index' => 1022,
                'name' => '1/22',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/22',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:73',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1023,
                'name' => '1/23',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/23',
                'type_id' => 6,
                'speed' => 1000,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:74',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 12900,
            ],
            [
                'device_id' => 2,
                'index' => 1024,
                'name' => '1/24',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/24',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:75',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1025,
                'name' => '1/25',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/25',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:76',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1026,
                'name' => '1/26',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise 1/26',
                'type_id' => 6,
                'speed' => 0,
                'mtu' => 9216,
                'physical_address' => '2C:FA:A2:27:2F:77',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 11300,
            ],
            [
                'device_id' => 2,
                'index' => 1027,
                'name' => 'Stacking Port 1/StackA',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise Stacking Port 1/StackA',
                'type_id' => 53,
                'speed' => 0,
                'mtu' => 0,
                'physical_address' => '00:00:00:00:00:00',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 6700,
            ],
            [
                'device_id' => 2,
                'index' => 1028,
                'name' => 'Stacking Port 1/StackB',
                'alias' => '',
                'description' => 'Alcatel-Lucent Enterprise Stacking Port 1/StackB',
                'type_id' => 53,
                'speed' => 0,
                'mtu' => 0,
                'physical_address' => '00:00:00:00:00:00',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 2,
                'last_change' => 6700,
            ],
            [
                'device_id' => 2,
                'index' => 13600003,
                'name' => 'VLAN10',
                'alias' => '',
                'description' => 'VLAN10',
                'type_id' => 136,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '2C:FA:A2:27:2F:5C',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 13311,
            ],
            [
                'device_id' => 2,
                'index' => 13600130,
                'name' => 'Loopback',
                'alias' => '',
                'description' => 'Loopback',
                'type_id' => 24,
                'speed' => 0,
                'mtu' => 32768,
                'physical_address' => '',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 221,
            ],
            [
                'device_id' => 3,
                'index' => 1,
                'name' => '',
                'alias' => '',
                'description' => 'Unit: 0 Slot: 0 Port: 1 Gigabit - Level 0x8010001',
                'type_id' => 6,
                'speed' => 1000000000,
                'mtu' => 1500,
                'physical_address' => 'A4:88:73:3C:01:C0',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 3,
                'index' => 2,
                'name' => '',
                'alias' => '',
                'description' => 'Virtual Interface',
                'type_id' => 6,
                'speed' => 1000000000,
                'mtu' => 1500,
                'physical_address' => 'A4:88:73:3C:01:C0',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 4,
                'index' => 1,
                'name' => '',
                'alias' => '',
                'description' => 'LOOPBACK',
                'type_id' => 24,
                'speed' => 0,
                'mtu' => 1500,
                'physical_address' => '',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 221,
            ],
            [
                'device_id' => 4,
                'index' => 2,
                'name' => '',
                'alias' => '',
                'description' => 'Ethernet',
                'type_id' => 6,
                'speed' => 10000000,
                'mtu' => 1500,
                'physical_address' => '00:1A:4B:1F:2F:BA',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 428,
            ],
            [
                'device_id' => 6,
                'index' => 1,
                'name' => 'lo',
                'alias' => '',
                'description' => '',
                'type_id' => 24,
                'speed' => 10000000,
                'mtu' => 16436,
                'physical_address' => '00:00:00:00:00:00',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 6,
                'index' => 2,
                'name' => 'eth0',
                'alias' => '',
                'description' => '',
                'type_id' => 6,
                'speed' => 100000000,
                'mtu' => 1500,
                'physical_address' => '00:40:8C:AC:96:8E',
                'link_up_down_trap' => false,
                'admin_status' => 1,
                'operational_status' => 1,
                'last_change' => 0,
            ],
            [
                'device_id' => 6,
                'index' => 3,
                'name' => 'sit0',
                'alias' => '',
                'description' => '',
                'type_id' => 1,
                'speed' => 0,
                'mtu' => 1480,
                'physical_address' => '00:00:00:00:96:8E',
                'link_up_down_trap' => false,
                'admin_status' => 2,
                'operational_status' => 2,
                'last_change' => 0,
            ],
        ];

        DB::table('device_interfaces')->insert($interfaces);
    }
}
