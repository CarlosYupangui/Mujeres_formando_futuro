<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\MisVis;

class MisVisController extends Controller
{
    public function informacionMisVis(){
        $getMisVis = MisVis::all();
        //dd($getMisVis);
        return view('sitioWeb/MisVis/MisVis', compact('getMisVis'));
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
