<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IanaPhysicalClassDefinitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Load Physical Class Definitions
         */
        $records = include database_path('/data/iana_physical_class_definitions.php');

        DB::table('physical_class_definitions')->insert($records);
    }
}
