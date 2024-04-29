<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;
use App\Models\Reference;

class CurriculoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $curriculo = User::find(1)->curriculo;
        $references = Reference::all()->groupBy('company_id')->map(function ($group) {
            return [
                'brand' => $group->first()->brand,
                'referencepeoples' => $group->map(function ($item) {
                    return [
                        'reference' => $item->reference_name,
                        'function' => $item->function,
                        'companyname' => $item->company_name,
                        'emailreference' => $item->reference_email,
                    ];
                })->values()->all(),
            ];
        })->values()->all();

        $dataCurriculum = [
            "header" => $curriculo->header,
            "contacts" => $curriculo->contacts,
            "educations" => $curriculo->formations,
            "skills" => $curriculo->skills,
            "interests" => $curriculo->interests,
            "languages" => $curriculo->languages,
            "professionalexperience" => $curriculo->experiences,
            "references" => $references,
        ];

        return $dataCurriculum;
    }
}
