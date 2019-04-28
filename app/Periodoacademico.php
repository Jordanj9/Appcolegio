<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodoacademico extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'etiqueta', 'anio', 'fecha_inicio', 'fecha_fin', 'user_change', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
            //
    ];

    public function periodounidad() {
        return $this->hasMany('App\Periodounidad');
    }

    public function fechasprocesosacademicos() {
        return $this->hasMany('App\Fechasprocesosacademico');
    }

    public function convocatorias() {
        return $this->hasMany('App\Convocatoria');
    }

}
