<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Project extends Model
{
    protected $guarded=[];
    use HasTranslations;
    public $translatable = ['title','desc'];
    public function lists()
    {
        return $this->hasMany(Project_list::class, 'project_id');
    }
}
