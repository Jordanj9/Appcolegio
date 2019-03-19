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

}
