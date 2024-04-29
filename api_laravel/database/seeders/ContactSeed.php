<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeed extends Seeder
{

    public function run(): void
    {
        Contact::create([
            "curriculo_id" => 1,
            "icon" => "fa-solid fa-phone",
            "content" => "(81) 99400-3340"
        ]);

        Contact::create([
            "curriculo_id" => 1,
            "icon" => "fa-regular fa-envelope",
            "content" => "kleryston.thiago@gmail.com"
        ]);

        Contact::create([
            "curriculo_id" => 1,
            "icon" => "fa-brands fa-linkedin-in",
            "content" => "https://www.linkedin.com/in/kleryston-thiago-1181a8156"
        ]);
    }
}
