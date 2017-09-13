<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $fillable = [
        'nClieCod','cClieTdoc', 'cClieNdoc', 'cClieDesc', 'cClieDirec', 'cClieObs'
    ];
}
