<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
	protected $fillable = [
        'nClieCod','cClieTdoc', 'cClieNdoc', 'cClieDesc', 'cClieDirec', 'cClieObs'
    ];
}
