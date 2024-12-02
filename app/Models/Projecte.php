<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projecte extends Model
{
    public $timestamps = false;
    protected $table = 'projectes';

    protected $fillable = [
        'titol_cat',
        'titol_esp',
        'descripcio_cat',
        'descripcio_esp',
        'kw',
        'ordre',
        'actiu',
        'imatge1',
        'imatge2',
        'imatge3',
        'imatge4',
        'imatge5',
        'imatge6',
        'imatge7',
        'imatge8',
        'imatge9',
        'imatge10'
    ];

}
