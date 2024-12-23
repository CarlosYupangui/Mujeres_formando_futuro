<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Informaciones;
use App\Models\Misvis;
use App\Models\Servicios;
use App\Models\Redes;
use App\Models\Imagenes;
use App\Models\Categorias;

class PaginaController extends Controller
{
    /*public function ViewObjetivos(){
        $getObjetivo = Objetivos::all();
        $getMisVis = Misionvisions::All();
        //dd($getObjetivo);
        return view('sitioWeb/index', compact('getObjetivo', 'getMisVis'));
    }*/
    
      public function inicio(){
        $getInformaciones = Informaciones::all();
        $getMisvis = Misvis::all();
        $getServicios = Servicios::all();
        $getRedes = Redes::all();
        $getImagenes = Imagenes::all();
        $getCategorias = Categorias::all();
        
        return view('SitioWeb/index', compact(
            'getInformaciones',
            'getImagenes',
            'getMisvis',
            'getServicios',
            'getRedes',
            'getCategorias'
        ));
      }
    
    /*public function inicio(){
      return view('sitioWeb/index');
    }*/
    
    
};
