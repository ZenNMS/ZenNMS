<?php

namespace Database\seeders\sample;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceEntityPhysicalSeeder extends Seeder
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
                "ent_physical_index" => 1,
                "descr" => "Fortinet FWF_51E, HW Serial#: FWF51E3U16000691",
                "vendor_type" => ".1.3.6.1.4.1.12356.516.516.0",
                "contained_in" => 0,
                "class" => 3,
                "parent_rel_pos" => -1,
                "name" => "FWF_51E",
                "hardware_rev" => null,
                "firmware_rev" => null,
                "software_rev" => "FortiWiFi-51E v6.2.3,build1066,191218 (GA)",
                "serial_num" => "FWF51E3U16000691",
                "mfg_name" => "Fortinet",
                "model_name" => "FWF_51E",
                "alias" => null,
                "asset_id" => null,
                "is_fru" => 1,
            ],
            [
                "device_id" => 1,
                "ent_physical_index" => 2,
                "descr" => "Ethernet Port, Vitual Domain: root",
                "vendor_type" => ".0.0.0",
                "contained_in" => 1,
                "class" => 10,
                "parent_rel_pos" => 1,
                "name" => "wan1",
                "hardware_rev" => null,
                "firmware_rev" => null,
                "software_rev" => null,
                "serial_num" => null,
                "mfg_name" => null,
                "model_name" => null,
                "alias" => null,
                "asset_id" => null,
                "is_fru" => 2,
            ],
            [
                "device_id" => 1,
                "ent_physical_index" => 3,
                "descr" => "Ethernet Port, Vitual Domain: root",
                "vendor_type" => ".0.0.0",
                "contained_in" => 1,
                "class" => 10,
                "parent_rel_pos" => 2,
                "name" => "wan2",
                "hardware_rev" => null,
                "firmware_rev" => null,
                "software_rev" => null,
                "serial_num" => null,
                "mfg_name" => null,
                "model_name" => null,
                "alias" => null,
                "asset_id" => null,
                "is_fru" => 2,
            ],
            [
                "device_id" => 1,
                "ent_physical_index" => 4,
                "descr" => "Ethernet Port, Vitual Domain: root",
                "vendor_type" => ".0.0.0",
                "contained_in" => 1,
                "class" => 10,
                "parent_rel_pos" => 3,
                "name" => "modem",
                "hardware_rev" => null,
                "firmware_rev" => null,
                "software_rev" => null,
                "serial_num" => null,
                "mfg_name" => null,
                "model_name" => null,
                "alias" => null,
                "asset_id" => null,
                "is_fru" => 2,
            ],
            [
                "device_id" => 2,
                "ent_physical_index" => 1,
                "descr" => "24 POE 10/100/1000 + 2 10G + 2 1/10G STK/UPLINK",
                "vendor_type" => ".1.3.6.1.4.1.6486.800.1.1.2.1.12.1.6",
                "contained_in" => 569,
                "class" => 9,
                "parent_rel_pos" => 1,
                "name" => "NI-1",
                "hardware_rev" => "01",
                "firmware_rev" => null,
                "software_rev" => "6.7.2.191.R04",
                "serial_num" => "T4681547",
                "mfg_name" => "ALCATEL",
                "model_name" => "OS6450-P24",
                "alias" => null,
                "asset_id" => null,
                "is_fru" => 2,
            ],
            [
                "device_id" => 2,
                "ent_physical_index" => 65,
                "descr" => "CMM",
                "vendor_type" => ".1.3.6.1.4.1.6486.800.1.1.2.1.12.1.6",
                "contained_in" => 569,
                "class" => 9,
                "parent_rel_pos" => 1,
                "name" => "CMM-1",
                "hardware_rev" => "01",
                "firmware_rev" => "n/a",
                "software_rev" => "6.7.2.191.R04",
                "serial_num" => "T4681547",
                "mfg_name" => "ALCATEL",
                "model_name" => "OS6450-P24",
                "alias" => null,
                "asset_id" => null,
                "is_fru" => 2,
            ],
            [
                "device_id" => 2,
                "ent_physical_index" => 97,
                "descr" => "OS 530W AC Power Supply",
                "vendor_type" => ".1.3.6.1.4.1.6486.800.1.1.2.1.12.3.2",
                "contained_in" => 569,
                "class" => 6,
                "parent_rel_pos" => 1,
                "name" => "PS-1",
                "hardware_rev" => null,
                "firmware_rev" => null,
                "software_rev" => null,
                "serial_num" => null,
                "mfg_name" => null,
                "model_name" => null,
                "alias" => null,
                "asset_id" => null,
                "is_fru" => 1,
            ],
            [
                "device_id" => 2,
                "ent_physical_index" => 569,
                "descr" => "Chassis",
                "vendor_type" => ".1.3.6.1.4.1.6486.800.1.1.2.1.12.1.6",
                "contained_in" => 0,
                "class" => 3,
                "parent_rel_pos" => 0,
                "name" => "Chassis",
                "hardware_rev" => "01",
                "firmware_rev" => null,
                "software_rev" => "6.7.2.191.R04",
                "serial_num" => "T4681547",
                "mfg_name" => "ALCATEL",
                "model_name" => "OS6450-P24",
                "alias" => null,
                "asset_id" => null,
                "is_fru" => 1,
            ],
            [
                "device_id" => 3,
                "ent_physical_index" => 1,
                "descr" => "Cisco Business Wireless 140AC Access Point",
                "vendor_type" => "",
                "contained_in" => 0,
                "class" => null,
                "parent_rel_pos" => -1,
                "name" => 'Cisco Business Wireless',
                "hardware_rev" => "V01",
                "firmware_rev" => null,
                "software_rev" => "10.4.1.0",
                "serial_num" => "FGL2438L7WL",
                "mfg_name" => null,
                "model_name" => "CBW140AC-E",
                "alias" => "",
                "asset_id" => "",
                "is_fru" => false,
            ],
            [
                "device_id" => 3,
                "ent_physical_index" => 8,
                "descr" => "Cisco Business 100AC Series (IEEE 802.11ac) Access Point",
                "vendor_type" => "",
                "contained_in" => 0,
                "class" => null,
                "parent_rel_pos" => -1,
                "name" => 'CBW140',
                "hardware_rev" => "V01",
                "firmware_rev" => null,
                "software_rev" => "10.4.1.0",
                "serial_num" => "FGL2446L89P",
                "mfg_name" => null,
                "model_name" => "CBW140AC-E",
                "alias" => "",
                "asset_id" => "",
                "is_fru" => false,
            ],
            [
                "device_id" => 3,
                "ent_physical_index" => 16,
                "descr" => "Cisco Business 100AC Series (IEEE 802.11ac) Access Point",
                "vendor_type" => "",
                "contained_in" => 0,
                "class" => null,
                "parent_rel_pos" => -1,
                "name" => 'CBW140',
                "hardware_rev" => "V01",
                "firmware_rev" => null,
                "software_rev" => "10.4.1.0",
                "serial_num" => "FGL2438L7WL",
                "mfg_name" => null,
                "model_name" => "CBW140AC-E",
                "alias" => "",
                "asset_id" => "",
                "is_fru" => false,
            ],
        ];

        DB::table('device_entity_physical')->insert($records);
    }
}
