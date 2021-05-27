<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterfaceTypeDefinitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Load Tunnel Type definitions
         */
        $types = include database_path('/seeders_data/iana_iftype_definitions.php');

        DB::table('interface_type_definitions')->insert($types);
    }
}
