<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provedor extends Model
{
    protected $fillable = [
    	'nProvCod',
    	'nProvRuc',
    	'cProvNom',
    	'cProvDir',
    	'nProvTel',
    	'cProvCel',
    	'cProvEma',
    	'cProvObs'
    ];
}
