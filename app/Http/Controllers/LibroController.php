<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class LibroController extends Controller
{
    public function index()
    {
    	return 'Hola, soy el controlador index de libro';
    }

    public function getLibros(){
    	/**
    	 * Retornar todos los datos
    	 */
    	//return Libro::all();
    	/**
    	 * Rotornar un libro en específico
    	 */
    	//return Libro::find(3);
    	//return Libro::where('titulo', 'Harry Potter')->get(['titulo', 'resumen', 'id', 'created_at']);
    	$data = array(
    		'libros'	=>	Libro::all()
    	);
    	return view('libros.index')->with($data);
    }
}
