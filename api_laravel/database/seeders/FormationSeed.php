<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formation;

class FormationSeed extends Seeder
{
    public function run(): void
    {
        Formation::create([
            "curriculo_id" => 1,
            "formation" => "Tecnologo | SPI",
            "university" => "UNIPÊ | João Pessoa",
            "date" => "2013 - 2015",
        ]);

        Formation::create([
            "curriculo_id" => 1,
            "formation" => "Tecnologo | ADS",
            "university" => "UNINASSAU | Recife",
            "date" => "2015 - 2018",
        ]);

        Formation::create([
            "curriculo_id" => 1,
            "formation" => "Pós Graduação | Desenvolvimento Full Stack",
            "university" => "ESTÁCIO | Recife",
            "date" => "2020 - 2021",
        ]);
    }
}
