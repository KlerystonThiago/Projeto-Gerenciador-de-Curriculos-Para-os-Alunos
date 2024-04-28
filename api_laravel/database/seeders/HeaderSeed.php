<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Header;

class HeaderSeed extends Seeder
{
    public function run(): void
    {
        Header::create([
            "curriculo_id" => 1,
            "name" => "Kleryston Thiago",
            "profession" => "Coordenador de Desenvolvimento",
            "resume" => "omo Coordenador de Tecnologia, minha experiência inclui gestão e implementação de soluções tecnológicas corporativas, liderança de equipes e alinhamento de estratégias de negócios com inovação tecnológica.",
            "iniciations" => "KT",
            "avatar" => "https://avatars.githubusercontent.com/u/151784293?v=4"
        ]);
    }
}
