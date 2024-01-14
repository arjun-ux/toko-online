<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
        ]);
        Role::create([
            'name' => 'penjual',
        ]);
        Role::create([
            'name' => 'pembeli',
        ]);
        User::create([
            'name' => 'arjun',
            'email' => 'arjun@mail.com',
            'password' => Hash::make('123123'),
            'role_id' => 1,
        ]);
    }
}
