<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'id', 'codigomateria', 'nombre', 'descripcion', 'recuperable', 'nivelable', 'area_id', 'naturaleza_id', 'user_change', 'created_at', 'updated_at'
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
