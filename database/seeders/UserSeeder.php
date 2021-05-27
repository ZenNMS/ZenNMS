<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@zen.text',
            'email_verified_at' => Carbon::now()->addMinutes(5),
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
        ]);
    }
}
