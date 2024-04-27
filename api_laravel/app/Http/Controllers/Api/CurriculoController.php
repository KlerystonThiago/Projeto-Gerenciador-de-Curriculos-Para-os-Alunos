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
                "resume" => "Como Coordenador de Tecnologia, minha experiência inclui gestão e implementação de soluções tecnológicas corporativas, liderança de equipes e alinhamento de estratégias de negócios com inovação tecnológica.",
                "iniciations" => "KT",
                "avatar" => "https://avatars.githubusercontent.com/u/151784293?v=4"

            ],
            "contacts" => [
                [
                    "icon" => "fa-solid fa-phone",
                    "content" => "(81) 99400-3340",
                ],
                [
                    "icon" => "fa-regular fa-envelope",
                    "content" => "kleryston.thiago@gmail.com",
                ],

                [
                    "icon" => "fa-brands fa-linkedin-in",
                    "content" => "https://www.linkedin.com/in/kleryston-thiago-1181a8156/"
                ]
            ],
            "educations" => [
                [
                    "formation" => "Tecnologo | SPI",
                    "university" => "UNIPÊ | João Pessoa",
                    "date" => "2013 - 2015"
                ],
                [
                    "formation" => "Tecnologo | ADS",
                    "university" => "UNINASSAU | Recife",
                    "date" => "2015 - 2018"
                ],
                [
                    "formation" => "Pós Graduação | Desenvolvimento Full Stack",
                    "university" => "ESTÁCIO | Recife",
                    "date" => "2020 - 2021"
                ]
            ],
            "skills" => [
                "HTML5",
                "CSS3",
                "PHP",
                "LARAVEL",
                "NODE JS",
                "JAVASCRIPT",
                "REACT JS",
                "VUE JS",
                "BOOTSTRAP CSS",
                "TAILWIND CSS",
                "C#",
                "QUASAR",
            ],
            "interests" => [
                "Desenvolvimento Full Stack",
                "Design Gráfico",
                "Desinvolvimento Front End",
                "Desinvolvimento Mobile",
            ],
            "languages" => [
                "Inglês / intermediário",
                "Espanhol / intermediário"
            ],
            "professionalexperience" => [
                [
                    "job" => "AirStudio / Creative Director",
                    "date" => "De 2005 á 2008",
                    "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At repellat id iusto modi voluptates libero soluta officiis odit minus rerum, velit voluptatem deserunt eligendi! Suscipit quis quos blanditiis sint minima!"
                ],
                [
                    "job" => "AirStudio / Creative Director",
                    "date" => "De 2005 á 2008",
                    "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At repellat id iusto modi voluptates libero soluta officiis odit minus rerum, velit voluptatem deserunt eligendi! Suscipit quis quos blanditiis sint minima!"
                ],
                [
                    "job" => "AirStudio / Creative Director",
                    "date" => "De 2005 á 2008",
                    "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At repellat id iusto modi voluptates libero soluta officiis odit minus rerum, velit voluptatem deserunt eligendi! Suscipit quis quos blanditiis sint minima!"
                ]

            ],
           "references" => [
                [
                    "brand" => "LOGO",
                    "referencepeoples" => [
                        [
                            "reference" => "Fred Rabelo",
                            "work" => "CEO",
                            "companyname" => "TISAUDE",
                            "emailreference" => "fredrabelo@gmail.com"
                        ],
                        [
                            "reference" => "Vitor Emanuel",
                            "work" => "Coordenador Geral",
                            "companyname" => "Globo Recife",
                            "emailreference" => "vitor@globo.com.br"

                        ],

                    ]
                ],
                [
                    "brand" => "LOGO",
                    "referencepeoples" => [
                        [
                            "reference" => "Renato Faustino",
                            "work" => "Gerente Geral",
                            "companyname" => "SBT",
                            "emailreference" => "renatofaustino@sbt.com.br"

                        ],
                        [
                            "reference" => "Marta Soares",
                            "work" => "Coordenadora de Tecnologia",
                            "companyname" => "Accenture",
                            "emailreference" => "martasoares@accenture.com.br"
                        ],
                    ]
                ]
            ],
        ];
        return response()->json(['data' => $dataCurriculum]);
    }
}
