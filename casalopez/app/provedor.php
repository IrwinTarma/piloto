<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provedor extends Model
{
     protected $table = 'provedors';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nProvCod';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nProvRuc',
    	'cProvNom',
    	'cProvDir',
    	'cProvTel',
    	'cProvCel',
    	'cProvEma',
    	'cProvObs'
    ];
}
