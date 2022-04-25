<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    protected $guarded =[];

    use HasFactory,HasTranslations;

    public $translatable = ['title'];
    public function actions()
    {
        return $this->hasMany(Action::class);
    }


}
