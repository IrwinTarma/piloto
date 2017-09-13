<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subtipo extends Model
{
    protected $table = 'Subtipos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nSTipCod';

    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nTipoCod',
    	'cSTipDes'
    ];
}
