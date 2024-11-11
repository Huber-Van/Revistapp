<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

Route::get('/articulos1', function () {
    $articulos=[
        ["id" => 1, "titulo" => "Primer artículo..."],
        ["id" => 2, "titulo" => "Segundo artículo..."],
        ["id" => 3, "titulo" => "Tercer artículo..."],
    ];
    return view('articulos.index',['articulos'=>$articulos]);
})->name('articulos.index');

/*Route::get('/articulos/{id}', function ($id) {
    $frase="Gracias por leer el articulo con id: ". $id;
    return view('articulos.show', ['id'=>$id]);
})->name('articulos.show'); */

//{} funcion anonima q sera capturado por la funcion
//el codigo php se realiza en las rutas o el controlador
//el llamado se hace en views 

Route::get('/articulos', function () {
    $articulos = ['Primero', 'Segundo','Tercero', 'Último'];
    return view('articulos' , [
        'nombre' => 'Ane Aranceta',
        'articulos' => $articulos
    ]);
})->name('articulos');

//LLAMANDO A LOS CONTROLLERS
//Route::get('articulos/', [ArticuloController::class, 'index'])->name('articulos.index');
Route::get('articulos/{id}', [ArticuloController::class, 'show'])->name('articulos.show');
//Route::get('articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');
//Route::post('articulos/', [ArticuloController::class, 'store'])->name('articulos.store');






/*Route::get('/articulos', function () {
    return 'Vamos a leer articulos';
}); 

Route::get('/usuarios', function () {
    return 'Aqui estan los usuarios';
});
*/

/*Route::post('/articulos', function () {
    return 'Vamos a insertar articulos';

}); */

/*
// devolver un Json
Route::get('/promociones', function () {
    $promociones = [
        [
            "id" => 1,
            "titulo" => "Primer artículo..."
        ],
        [
            "id" => 1,
            "titulo" => "Segundo artículo..."
        ]
    ];
    return $promociones;
}); */

/*
//rutas con parametros
Route::get('articulos/{id}', function ($id) {
    return 'Vas a leer el artículo: '.$id;
});
*/

//varios parametros
/*
Route::get('articulos/{id}/usuario/{name}', function ($id, $name) {
    return 'Vas a leer el artículo: '.$id. ' del usuario' .$name;
});

//parametros opcionales
/*
Route::get('articulos/{id?}', function ($id = 0) {
    return 'Vas a leer el artículo: '.$id;
});


Route::get('/fecha', function () {
    $fecha = request('fecha');
    return $fecha;
});
*/