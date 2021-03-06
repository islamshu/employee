<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    protected $guarded=[];
    use HasTranslations;
    public $translatable = ['title','description'];
}
