<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class ThirdRelation extends Model
{
    protected $guarded=[];
    use HasTranslations;
    public $translatable = ['title'];
}