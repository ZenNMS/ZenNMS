<?php

namespace Database\Seeders;

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
                DeviceResponseTimeSeeder::class,
                DeviceSettingsSeeder::class,
            ]);
        }
    }
}
