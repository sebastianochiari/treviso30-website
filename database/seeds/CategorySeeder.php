<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Cultura',
            'color' => '808080'
        ]);
        DB::table('categories')->insert([
            'name' => 'Economia',
            'color' => '977EF2'
        ]);
        DB::table('categories')->insert([
            'name' => 'Enogastronomia',
            'color' => '448C30'
        ]);
        DB::table('categories')->insert([
            'name' => 'Musica',
            'color' => '2955D9'
        ]);
        DB::table('categories')->insert([
            'name' => 'Storia di Treviso',
            'color' => '0597F2'
        ]);
        DB::table('categories')->insert([
            'name' => 'Benessere',
            'color' => 'F2B90C'
        ]);
        DB::table('categories')->insert([
            'name' => 'Sport',
            'color' => 'F25C05'
        ]);
    }
}
