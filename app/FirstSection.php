<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FirstSection extends Model
{
    protected $guarded=[];
    use HasTranslations;
    public $translatable = ['main_title','secand_title','first_btn','secand_btn'];
}
