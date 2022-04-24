<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Action extends Model
{
    protected $guarded =[];
    
    use HasFactory,HasTranslations;


    public function asJason($value)
    {
        return json_encode($value,JSON_UNESCAPED_UNICODE);
    }

    public $translatable = ['title','body','tecnische'];

    public  function getPhotoAttribute($image_path)
    {
      return asset($image_path);
    }


    


    public function user()
    {

        return $this->belongsTo(User::class);

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    protected $casts = [
        'data' => 'array',
    ];
}
