<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'etiqueta', 'descripcion', 'user_change', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
            //
    ];

    public function convocatorias() {
        return $this->hasMany('App\Convocatoria');
    }

}
