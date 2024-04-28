<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Curriculo;

class CurriculoSeed extends Seeder
{
    public function run(): void
    {
        Curriculo::create([
            "user_id" => 1,
            "name_curriculo" => "Kleryston Thiago"
        ]);
    }
}
