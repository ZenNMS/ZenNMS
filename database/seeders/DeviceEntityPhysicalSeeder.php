<?php

namespace Database\Seeders;

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
        ];

        DB::table('device_entity_physical')->insert($records);
    }
}
