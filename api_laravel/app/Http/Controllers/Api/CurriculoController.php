<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurriculoController extends Controller
{
    public function index()
    {
        $dataCurriculum = [
            "header" => [
                "name" => "Kleryston Thiago",
                "profession" => "Cordenador de Desenvolvimento",
                "resume" => "KLERYSTON THE BEST PROFESSIONAL TEACHER FOREVER ♥",
                "iniciations" => "KT",
                "avatar" => "https://avatars.githubusercontent.com/u/151784293?v=4"

            ],
            "contact" => [
                "email" => "kleryston.thiago@gmail.com",
                "phone" => "(81) 99400-3340",
                "github" => "https://github.com/klerystony",

            ],
            "education" => [
                [
                    "formation" => "UniCesumar 2021 – 07/2024 Tecnologia em Análise e Desenvolvimento de Sistemas."
                ]
            ],
            "skills" => [
                [
                    "skill" => "Hardware / Software"
                ],
                [
                    "skill" => "Desenvolvimento WEB"
                ],
                [
                    "skill" => "Suporte N1 e N2"
                ],
                [
                    "skill" => "C# / Médio"
                ],
                [
                    "skill" => "SQL / Básico"
                ],
                [
                    "skill" => "Git e Github"
                ]
            ],
            "languages" => [
                [
                    "language" => "Inglês / intermediário"
                ]
            ],
            "professionalexperience" => [
                [
                    "job" => "AirStudio / Creative Director",
                    "time" => "De 2005 á 2008",
                    "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At repellat id iusto modi voluptates libero soluta officiis odit minus rerum, velit voluptatem deserunt eligendi! Suscipit quis quos blanditiis sint minima!"
                ],
                [
                    "job" => "AirStudio / Creative Director",
                    "time" => "De 2005 á 2008",
                    "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At repellat id iusto modi voluptates libero soluta officiis odit minus rerum, velit voluptatem deserunt eligendi! Suscipit quis quos blanditiis sint minima!"
                ],
                [
                    "job" => "AirStudio / Creative Director",
                    "time" => "De 2005 á 2008",
                    "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At repellat id iusto modi voluptates libero soluta officiis odit minus rerum, velit voluptatem deserunt eligendi! Suscipit quis quos blanditiis sint minima!"
                ]

            ],
           "references" => [
                [
                    "brand" => "brand",
                    "people" => [
                        [
                            "reference" => "Jonathan Doe",
                            "work" => "GENERAL MANAGER",
                            "companyname" => "Company Name",
                            "emailreference" => "bas@company.com"

                        ],
                        [
                            "reference" => "Jonathan Doe",
                            "work" => "GENERAL MANAGER",
                            "companyname" => "Company Name",
                            "emailreference" => "bas@company.com"
                        ],
                    ]
                ],
                [
                    "brand" => "brand",
                    [
                        "reference" => "Jonathan Doe",
                        "work" => "GENERAL MANAGER",
                        "companyname" => "Company Name",
                        "emailreference" => "bas@company.com"
                    ],
                    [
                        "reference" => "Jonathan Doe",
                        "work" => "GENERAL MANAGER",
                        "companyname" => "Company Name",
                        "emailreference" => "bas@company.com"
                    ],
                ]
            ],
        ];
        return response()->json(['data' => $dataCurriculum]);
    }
}
