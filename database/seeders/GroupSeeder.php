<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [
                'name' => 'España',
                'slug' => 'espana',
                'group_id' => null,
            ],
            [
                'name' => 'Baleares',
                'slug' => 'baleares',
                'group_id' => 1,
            ],
            [
                'name' => 'Mallorca',
                'slug' => 'mallorca',
                'group_id' => 2,
            ],
            [
                'name' => 'Palma',
                'slug' => 'palma',
                'group_id' => 3,
            ],
            [
                'name' => 'Casa',
                'slug' => 'casa',
                'group_id' => 4,
            ],
            [
                'name' => 'Firewall',
                'slug' => 'firewall',
                'group_id' => 5,
            ],
            [
                'name' => 'Switch',
                'slug' => 'switch',
                'group_id' => 5,
            ],
            [
                'name' => 'Server',
                'slug' => 'server',
                'group_id' => 5,
            ],
        ];

        DB::table('groups')->insert($groups);
    }
}
