<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
// use Spatie\Translatable\HasTranslations;
class Partner extends Model
{
    protected $guarded=[];
    protected $connection = 'mysql2';
    protected $table = 'vendors';

}
