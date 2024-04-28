<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interest;

class InterestSeed extends Seeder
{
    public function run(): void
    {
        Interest::create([
            "curriculo_id" => 1,
            "description" => "Desenvolvimento Full Stack"
        ]);

        Interest::create([
            "curriculo_id" => 1,
            "description" => "Design Gráfico"
        ]);

        Interest::create([
            "curriculo_id" => 1,
            "description" => "Desenvolvimento Front End"
        ]);

        Interest::create([
            "curriculo_id" => 1,
            "description" => "Desenvolvimento Mobile"
        ]);
    }
}
