<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model implements TranslatableContract
{
    use HasFactory,Translatable, SoftDeletes;

    protected $guarded = [];

    public $translatedAttributes  = ['paragraph'];


    public function translations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AboutTranslation::class, 'about_id');
    }
}
