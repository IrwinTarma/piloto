<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    protected $table = 'Provedors';

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