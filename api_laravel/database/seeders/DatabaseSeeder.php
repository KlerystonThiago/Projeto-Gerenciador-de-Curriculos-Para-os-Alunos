<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeed::class,
            CurriculoSeed::class,
            HeaderSeed::class,
            ContactSeed::class,
            FormationSeed::class,
            SkillSeed::class,
            InterestSeed::class,
            LanguageSeed::class,
            ExperienceSeed::class,
            ReferenceSeed::class,
        ]);
    }
}
