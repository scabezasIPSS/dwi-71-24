<?php

use App\Http\Controllers\MantenedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mantenedor', function () {
    // $data = [
    //     'data' => [
    //         'atributo' => 'valor'
    //     ]
    // ];

    // $dat2 = array(
    //     'data' = array(
    //         "atributo" => "asd"
    //     )
    // );
    // return $data;
    return view('MantenedorView');
});

// Route::get('/mantenedor', function () {
//     $control = new MantenedorController();
//     $retorno = $control->get(NULL);
//     return $retorno;
// });
Route::get('/mantenedor/{_id}', function ($_id) {
    $control = new MantenedorController();
    $retorno = $control->get($_id);
    return $retorno;
});
Route::post('/mantenedor', function () {
});
