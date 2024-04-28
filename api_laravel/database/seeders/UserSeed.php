<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeed extends Seeder
{
    public function run(): void
    {
        User::create([
            "name" => "Kleryston Thiago",
            "email" => "admin@mail.com",
            "password" => bcrypt('admin123')
        ]);
    }
}
