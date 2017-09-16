<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	//protected $table = 'Clientes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'nClieCod';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

	protected $fillable = [
        'nClieCod','nTdocCod', 'cClieNdoc', 'cClieDesc', 'cClieDirec', 'cClieObs'
    ];

    public function tipodoc()
    {
        return $this->belongsTo('App\TipoDoc', 'nTdocCod');
    }
}