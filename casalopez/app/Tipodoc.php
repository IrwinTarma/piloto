<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipodoc extends Model
{
	//protected $table = 'Tipodocs';
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nTdocCod';
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

	protected $fillable = [
        'cTdocSigla','nTdocDesc'
    ];

    public function clientes()
    {
        return $this->hasMany('App\Cliente','nTdocCod');
    }
    
}
