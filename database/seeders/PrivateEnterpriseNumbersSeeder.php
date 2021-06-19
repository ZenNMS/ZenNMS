<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivateEnterpriseNumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Load Private Enterprise Numbers from file
         */
        $privateEnterpriseNumbers = include database_path('/data/private_enterprise_numbers.php');

        $chunks = array_chunk($privateEnterpriseNumbers, 100, true);

        $this->command->getOutput()->progressStart(count($chunks));

        foreach($chunks as $chunk) {

            DB::table('private_enterprise_numbers')->insert($chunk);

            $this->command->getOutput()->progressAdvance();
        }

        $this->command->getOutput()->progressFinish();
    }
}
