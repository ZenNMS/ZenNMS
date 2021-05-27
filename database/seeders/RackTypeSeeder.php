<?php

namespace Database\Seeders;

use App\Enums\MessageSeverity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RackTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        DB::table('rack_types')->insert([
            [
                'name' => '2-post frame',
                'slug' => '2-post-frame',
                'description' => '2-post frame',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => '4-post frame',
                'slug' => '4-post-frame',
                'description' => '4-post frame',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => '4-post cabinet',
                'slug' => '4-post-cabinet',
                'description' => '4-post cabinet',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Wall-mounted frame',
                'slug' => 'wall-mounted-frame',
                'description' => 'Wall-mounted fram',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Wall-mounted cabinet',
                'slug' => 'wall-mounted-cabinet',
                'description' => 'Wall-mounted cabinet',
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ]);

        /**
         * Keep track of database seed
         */
        DB::table('events')->insert([
            'timestamp' => Carbon::now(),
            'entity' => 'SYSTEM',
            'entity_id' => null,
            'severity_code' => MessageSeverity::INFORMATIONAL,
            'severity_name' => MessageSeverity::SeverityName(MessageSeverity::INFORMATIONAL),
            'action' => 'DATABASE SEED',
            'message' => 'Table rack_types has been seeded.',
        ]);
    }
}










