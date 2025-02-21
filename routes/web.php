<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MachinesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('pages.home');
Route::get('nosotros', [PagesController::class, 'about'])->name('pages.about');


Route::get('servicios/empacado-y-envasado', [ServicesController::class, 'show_services_empacado'])->name('pages.services.empacado');
Route::get('servicios/ingenieria-y-mantenimiento', [ServicesController::class, 'show_services_ingenieria'])->name('pages.services.ingenieria');

Route::get('maquinas', [PagesController::class, 'machines'])->name('pages.machines');
Route::get('maquinas/fabricaciones-especiales', [MachinesController::class, 'show_machines_fabricaciones_especiales'])->name('pages.machines.fabricaciones-especiales');
Route::get('maquinas/horno-etiquetador', [MachinesController::class, 'show_machines_horno_etiquetador'])->name('pages.machines.horno-etiquetador');
Route::get('maquinas/maquinas-dosificadoras-y-llenadoras', [MachinesController::class, 'show_machines_maquinas_dosificadoras_y_llenadoras'])->name('pages.machines.maquinas-dosificadoras-y-llenadoras');
Route::get('maquinas/horno-termo-contraible-con-enfajadora-automatica', [MachinesController::class, 'show_machines_horno_termo_contraible_con_enfajadora_automatica'])->name('pages.machines.horno-termo-contraible-con-enfajadora-automatica');
Route::get('maquinas/empacadora-al-vacio', [MachinesController::class, 'show_machines_empacadora_al_vacio'])->name('pages.machines.empacadora-al-vacio');
Route::get('maquinas/fajas-transportadoras', [MachinesController::class, 'show_machines_fajas_transportadoras'])->name('pages.machines.fajas-transportadoras');


Route::get('portfolio', [PagesController::class, 'portfolio'])->name('pages.portfolio');


Route::get('contactenos', [PagesController::class, 'contact'])->name('pages.contact');
Route::post('contactenos', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
