<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ArticuloController extends Controller
{
    public function index()
    {
        $articulos =[
            ["id"=>1, "titulo"=>"Primer artículo..."],
            ["id"=>2, "titulo"=>"Segundo artículo..."],
            ["id"=>3, "titulo"=>"Tercer artículo..."],
        ];
        return view('articulos.index', [
            'articulos' => $articulos
        ]);
    }
    public function show($id)
    {
        return view('articulos.show', [
            'id' => $id
        ]);
    }
}
