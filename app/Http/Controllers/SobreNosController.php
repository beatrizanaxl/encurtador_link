<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobrenos(){
        return View('site.sobrenos');
    }
}
