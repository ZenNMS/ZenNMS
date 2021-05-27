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
        $this->call([
            PhysicalClassDefinitionsTableSeeder::class,
            PrivateEnterpriseNumbersSeeder::class,
            GroupSeeder::class,
            SiteSeeder::class,
            RackTypeSeeder::class,
            RackSeeder::class,
            TunnelTypeDefinitionsSeeder::class,
            UserSeeder::class,
            // Insert some nodes
            NodeSeeder::class,
        ]);
    }
}
