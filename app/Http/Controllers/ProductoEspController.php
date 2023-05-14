<?php

namespace App\Http\Controllers;

use App\Models\ProductoEsp;
use Illuminate\Http\Request;

class ProductoEspController extends Controller
{
    //
    public function listar(Request $req) 
    {       

        
        return view("productosEsp.main", ["datos" => ProductoEsp::Encargo()->get() ]) ;
    }

    

    public function crear(Request $req) 
    {
        // TODO
        return view("productosEsp.crear");
    }

    public function guardar(Request $req) 
    {
        // TODO
        $objeto = new ProductoEsp;
        $objeto->idUsu=auth()->user()->idUsu;
        $objeto->nomProEsp=$req->input('nomProEsp');
        $objeto->tipoProEsp=$req->input('tipoProEsp');
        $objeto->formatoProEsp=$req->input('formatoProEsp');
        $objeto->descProEsp=$req->input('descProEsp');

        $objeto->save();
        return redirect()->route('productoEsp.listar');
    }
    
    public function borrar(Request $req,  $productoEsp) 
    {  
        
        
        $productoEspDelete = ProductoEsp::find($productoEsp);
        $productoEspDelete->delete();

        return redirect()->route("productoEsp.listar") ;
        
    }


    public function editar(Request $req,  $productoEsp) 
    {  
        
        
        $productoEspUpdate = ProductoEsp::find($productoEsp);
        return view("productosEsp.editar",compact("productoEspUpdate"));
        

        return redirect()->route("productoEsp.listar") ;
        
    }

    public function guardarEdicion(Request $req,  $productoEsp) 
    {  
        
        
        $productoEspUpdate = ProductoEsp::find($productoEsp);
        $productoEspUpdate->idUsu=auth()->user()->idUsu;
        $productoEspUpdate->nomProEsp=$req->input('nomProEsp');
        $productoEspUpdate->tipoProEsp=$req->input('tipoProEsp');
        $productoEspUpdate->formatoProEsp=$req->input('formatoProEsp');
        $productoEspUpdate->descProEsp=$req->input('descProEsp');

        $productoEspUpdate->update();
        return redirect()->route('productoEsp.listar');
        
    }
}
