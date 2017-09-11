<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	//protected $table = 'Provedors';

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
        'nClieCod','cClieTdoc', 'cClieNdoc', 'cClieDesc', 'cClieDirec', 'cClieObs'
    ];
}