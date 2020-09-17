<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();

        $admin = User::create([
            'name' => 'Giampaolo Zorzo',
            'email' => 'treviso30@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $author = User::create([
            'name' => 'Paolino Paperino',
            'email' => 'paolinopaperino@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
    }
}
