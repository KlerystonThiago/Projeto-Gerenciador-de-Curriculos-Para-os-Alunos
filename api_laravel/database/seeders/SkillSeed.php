<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeed extends Seeder
{
    public function run(): void
    {
        Skill::create([
            'curriculo_id' => 1,
            'description' => 'HTML5',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'CSS3',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'PHP',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'LARAVEL',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'NODE JS',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'JAVASCRIPT',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'REACT JS',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'VUE JS',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'BOOTSTRAP CSS',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'TAILWIND CSS',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'C#',
        ]);

        Skill::create([
            'curriculo_id' => 1,
            'description' => 'QUASAR',
        ]);
    }
}
