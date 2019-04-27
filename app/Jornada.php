<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'descripcion', 'horainicio', 'horafin', 'jornadasnies', 'findesemana', 'user_change' . 'created_at', 'updated_at'
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

}
