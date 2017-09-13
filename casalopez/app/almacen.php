<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class almacen extends Model
{    
    protected $table = 'Almacens';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nAlmCod';

    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'cAlmNom',
    	'cAlmUbi'
    ];
}
