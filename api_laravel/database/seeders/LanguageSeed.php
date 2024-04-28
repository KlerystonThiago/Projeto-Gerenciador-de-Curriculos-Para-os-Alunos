<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeed extends Seeder
{
    public function run(): void
    {
        Language::create([
            "curriculo_id" => 1,
            "description" => "Inglês / intermediário"
        ]);

        Language::create([
            "curriculo_id" => 1,
            "description" => "Espanhol / intermediário"
        ]);
    }
}
