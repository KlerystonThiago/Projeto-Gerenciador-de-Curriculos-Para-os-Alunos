<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeed extends Seeder
{
    public function run(): void
    {
        Experience::create([
            "curriculo_id" => 1,
            "job" => "AirStudio / Creative Director 1",
            "date" => "De 2005 á 2008",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At repellat id iusto modi voluptates libero soluta officiis odit minus rerum, velit voluptatem deserunt eligendi! Suscipit quis quos blanditiis sint minima!",
        ]);

        Experience::create([
            "curriculo_id" => 1,
            "job" => "AirStudio / Creative Director 2",
            "date" => "De 2005 á 2008",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At repellat id iusto modi voluptates libero soluta officiis odit minus rerum, velit voluptatem deserunt eligendi! Suscipit quis quos blanditiis sint minima!",
        ]);

        Experience::create([
            "curriculo_id" => 1,
            "job" => "AirStudio / Creative Director 3",
            "date" => "De 2005 á 2008",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At repellat id iusto modi voluptates libero soluta officiis odit minus rerum, velit voluptatem deserunt eligendi! Suscipit quis quos blanditiis sint minima!",
        ]);
    }
}
