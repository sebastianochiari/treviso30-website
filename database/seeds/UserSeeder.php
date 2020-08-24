<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Giampaolo Zorzo',
            'email' => 'treviso30@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Sebastiano Chiari',
            'email' => 'sebastianochiari8@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Pippo Franco',
            'email' => 'pippofranco@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
