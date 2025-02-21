<?php

namespace App\Http\Controllers;

use BadFunctionCallException;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show_services_empacado()
    {
        return view('services.empacado-y-envasado');
    }

    public function show_services_ingenieria()
    {
        return view('services.ingenieria-y-mantenimiento');
    }
}
