<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachinesController extends Controller
{
    public function show_machines_fabricaciones_especiales()
    {
        return view('machines.fabricaciones-especiales');
    }

    public function show_machines_horno_etiquetador()
    {
        return view('machines.horno-etiquetador');
    }

    public function show_machines_maquinas_dosificadoras_y_llenadoras()
    {
        return view('machines.maquinas-dosificadoras-y-llenadoras');
    }

    public function show_machines_horno_termo_contraible_con_enfajadora_automatica()
    {
        return view('machines.horno-termo-contraible-con-enfajadora-automatica');
    }

    public function show_machines_empacadora_al_vacio()
    {
        return view('machines.empacadora-al-vacio');
    }

    public function show_machines_fajas_transportadoras()
    {
        return view('machines.fajas-transportadoras');
    }
}
