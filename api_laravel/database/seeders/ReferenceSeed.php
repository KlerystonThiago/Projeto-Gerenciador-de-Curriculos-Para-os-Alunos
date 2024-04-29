<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reference;

class ReferenceSeed extends Seeder
{
    public function run(): void
    {
        Reference::create([
            "curriculo_id" => 1,
            "company_id" => 1,
            "brand" => "BRAND 1",
            "reference_name" => "Fred Rabelo",
            "function" => "CEO",
            "company_name" => "TISAUDE",
            "reference_email" => "fredrabelo@gmail.com",
        ]);

        Reference::create([
            "curriculo_id" => 1,
            "company_id" => 1,
            "brand" => "BRAND 1",
            "reference_name" => "Flávio Rabelo",
            "function" => "Coordenador Geral",
            "company_name" => "TISAUDE",
            "reference_email" => "vitor@globo.com.br",
        ]);

        Reference::create([
            "curriculo_id" => 1,
            "company_id" => 2,
            "brand" => "BRAND 2",
            "reference_name" => "Renato Faustino",
            "function" => "Gerente Geral",
            "company_name" => "Accenture",
            "reference_email" => "renatofaustino@sbt.com.br",
        ]);

        Reference::create([
            "curriculo_id" => 1,
            "company_id" => 2,
            "brand" => "BRAND 2",
            "reference_name" => "Marta Soares",
            "function" => "Coordenadora de Tecnologia",
            "company_name" => "Accenture",
            "reference_email" => "martasoares@accenture.com.br",
        ]);
    }
}
