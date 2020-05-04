<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class profile extends Model
{
    protected $table = 'profile';
    protected $fillable = [
        'sex',
        'age',
        'weight',
        'height',
        ];
    protected $guarded = ['id'];

}
