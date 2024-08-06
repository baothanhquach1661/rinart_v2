<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'ale',
                'email' => 'ale@gmail.com',
                'role' => 'admin',
                'role_special' => 'super_admin',
                'password' => static::$password ??= Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'role_special' => 'admin',
                'password' => static::$password ??= Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'web',
                'email' => 'web@gmail.com',
                'role' => 'admin',
                'role_special' => 'web',
                'password' => static::$password ??= Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'role_special' => 'user',
                'password' => static::$password ??= Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
        ]);
    }
}
