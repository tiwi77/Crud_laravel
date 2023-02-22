<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        user::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'role'      => 'Administrator',
            'password'  => Hash::make('admin')
        ]);
        user::create([
            'name'      => 'rika',
            'email'     => 'rika77@gmail.com',
            'role'      => 'user',
            'password'  => Hash::make('123456')
        ]);
        user::create([
            'name'      => 'tiwi',
            'email'     => 'tiwi@gmail.com',
            'role'      => 'operator',
            'password'  => Hash::make('123456')
        ]);
    }
}
