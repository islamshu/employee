<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = [
        'key', 'value',
    ];
    public $timestamps = false;


    public static function getValue($key, $default = '')
    {
        return static::find($key)->value ?? $default;
    }

    public static function setValue($key, $value)
    {
        static::query()->updateOrCreate([
            'key' => $key,
        ], [
            'value' => $value,
        ]);
    }
}
