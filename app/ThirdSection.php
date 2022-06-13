<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class ThirdSection extends Model
{
    protected $guarded=[];
    use HasTranslations;
    public $translatable = ['body'];
    /**
     * Get all of the comments for the ThirdSection
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relation()
    {
        return $this->hasMany(ThirdRelation::class, 'section_id');
    }
}