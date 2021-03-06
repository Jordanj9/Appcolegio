<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametrizardocumentoanexo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'documentoanexo_id', 'grado_id', 'unidad_id', 'jornada_id', 'user_change', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
            //
    ];
}
