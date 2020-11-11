<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create([
            'id' => '1',
            'name' => 'Cultura',
            'color' => '808080'
        ]);

        Category::create([
            'id' => '2',
            'name' => 'Economia',
            'color' => '977EF2'
        ]);

        Category::create([
            'id' => '3',
            'name' => 'Enogastronomia',
            'color' => '448C30'
        ]);

        Category::create([
            'id' => '4',
            'name' => 'Musica',
            'color' => '2955D9'
        ]);

        Category::create([
            'id' => '5',
            'name' => 'Storia di Treviso',
            'color' => '0597F2'
        ]);

        Category::create([
            'id' => '6',
            'name' => 'Benessere',
            'color' => 'F2B90C'
        ]);

        Category::create([
            'id' => '7',
            'name' => 'Sport',
            'color' => 'F25C05'
        ]);
    }
}
