<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    protected $table = 'Tipos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nTipoCod';

    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'cTipoDesc'
    ];
}
