<?php

namespace Database\Seeders;

use Database\Seeders\sample\DeviceSettingsSeeder;
use Database\Seeders\sample\DeviceSeeder;
use Database\Seeders\sample\DeviceResponseTimeSeeder;
use Database\Seeders\sample\DeviceNeighboursSeeder;
use Database\Seeders\sample\DeviceInterfacesSeeder;
use Database\Seeders\sample\DeviceEntityPhysicalSeeder;
use Database\Seeders\sample\WirelessAccessPointsSeeder;
use Database\Seeders\sample\WirelessClientsCountSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $loadSampleData = $this->command->confirm('Load sample data?');

        $this->call([
            DeviceTypesSeeder::class,
            IanaInterfaceTypeDefinitionsSeeder::class,
            IanaPhysicalClassDefinitionsSeeder::class,
            IanaTunnelTypeDefinitionsSeeder::class,
            InterfaceStatusesSeeder::class,
            PrivateEnterpriseNumbersSeeder::class,
            RackTypeSeeder::class,
            UserSeeder::class,
        ]);

        if ($loadSampleData) {
            $this->call([
                DeviceSeeder::class,
                DeviceEntityPhysicalSeeder::class,
                DeviceInterfacesSeeder::class,
                DeviceNeighboursSeeder::class,
                DeviceResponseTimeSeeder::class,
                DeviceSettingsSeeder::class,
                WirelessAccessPointsSeeder::class,
                WirelessClientsCountSeeder::class,
            ]);
        }
    }
}
