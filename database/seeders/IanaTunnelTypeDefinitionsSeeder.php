<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IanaTunnelTypeDefinitionsSeeder extends Seeder
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
        $records = include database_path('/data/iana_tunnel_type_definitions.php');

        DB::table('tunnel_type_definitions')->insert($records);
    }
}
