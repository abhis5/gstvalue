<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    public $table = 'companies';

    public function comments()
    {
        return $this->hasMany('App\Filing');
    }

}

