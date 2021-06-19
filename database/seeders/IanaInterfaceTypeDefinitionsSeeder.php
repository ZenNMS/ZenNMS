<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IanaInterfaceTypeDefinitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @noinspection PhpIncludeInspection
     */
    public function run()
    {
        $records = include database_path('data/iana_iftype_definitions.php');

        DB::table('interface_type_definitions')->insert($records);
    }
}
