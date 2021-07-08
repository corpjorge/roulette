<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
            'id' => 1,
            'name' => 'Jorge Eduardo Peralta Guzman',
            'email' => 'corpjorge@hotmail.com',
            'password' => Hash::make('admin'),
            'document' => '1014205146',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'John Freddy Moreno',
            'email' => 'john.moreno@fyclsingenieria.com',
            'document' => '123456789',
            'password' => Hash::make('12342wefdgsasdf@'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Corp Jorge',
            'email' => 'corjorge@hotmail',
            'document' => '987654321',
            'password' => Hash::make('12342wefdgsasdf@'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Jorge',
            'email' => 'corpjorge@q',
            'document' => '111111111',
            'password' => Hash::make('12342wefdgsasdf@'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
