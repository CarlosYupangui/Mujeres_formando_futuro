<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriaController extends Controller
{
    public function informacionCategoria(){
        $getCategoria = Categorias::all();
        //dd($getCategoria);
        return view('sitioWeb/Categoria/informacion', compact('getCategoria'));
    }
    
    public function editarCategoria($id){
        //dd($id);
        $editCategoria = Categoria::where('id', $id)->firstOrFail();
        //dd($editCategoria);
        return view('editarCategoria', compact('editCategoria'));
    }
    
    public function actualizar(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actualiCliente = Cliente::findOrFail($id);
        $requestCliente = $request->all();
        $actualiCliente->update($requestCliente);
        return redirect()->to('/informacion');
    }
}
