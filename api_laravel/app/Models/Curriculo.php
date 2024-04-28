<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;

    public function header()
    {
        return $this->hasOne(Header::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function interests()
    {
        return $this->hasMany(Interest::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
}
