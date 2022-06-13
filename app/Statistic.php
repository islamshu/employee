<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Statistic extends Model
{
    protected $guarded=[];
    use HasTranslations;
    public $translatable = ['main_title','title1','title2','title3','title4'];
}