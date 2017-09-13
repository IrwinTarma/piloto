<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medida extends Model
{
    protected $table = 'Medidas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nMedCod';

    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'cMedNom',
    	'cMedDesc'
    ];
}
