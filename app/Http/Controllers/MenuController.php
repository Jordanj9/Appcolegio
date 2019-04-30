<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller {

    /**
     * return the view for the manipulation of the users
     */
    public function usuarios() {
        return view('menu.usuarios')->with('location', 'usuarios');
    }

    /**
     * return the view for the manipulation of the admisions process
     */
    public function admisiones() {
        return view('menu.admisiones')->with('location', 'admisiones');
    }

    /**
     * return the view for the manipulation of the enrollment process
     */
    public function matricula() {
        return view('menu.matricula')->with('location', 'matricula');
    }

}
