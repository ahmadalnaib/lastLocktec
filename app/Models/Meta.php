<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Meta extends Model
{

    protected $guarded =[];
    use HasFactory,HasTranslations;


    public $translatable = ['description','keywords','title'];
}
