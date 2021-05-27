<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhysicalClassDefinitionsTableSeeder extends Seeder
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
        $definitions = include database_path('/seeders_data/iana_physical_class_definitions.php');

        DB::table('physical_class_definitions')->insert($definitions);
    }
}
