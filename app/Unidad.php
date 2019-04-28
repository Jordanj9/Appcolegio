<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'ciudad_id', 'user_change', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
            //
    ];

    public function ciudad() {
        return $this->belongsTo('App\Ciudad');
    }

    public function fechasprocesosacademicos() {
        return $this->hasMany('App\Fechasprocesosacademico');
    }

    public function periodounidad() {
        return $this->hasMany('App\Periodounidad');
    }

    public function convocatorias() {
        return $this->hasMany('App\Convocatoria');
    }

}
