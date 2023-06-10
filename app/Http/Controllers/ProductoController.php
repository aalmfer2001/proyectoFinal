<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function listar(Request $req) 
    {  
        return view("productos.main", ["datos" => Producto::all() ]) ;
    }

    

    public function crear(Request $req) 
    {
        // TODO
        return view("productos.crear");
    }

    public function guardar(Request $req) 
    {
        // TODO
        $objeto = new Producto;
        $objeto->nomPro=$req->input('nomPro');
        $objeto->tipoPro=$req->input('tipoPro');
        $objeto->formatoPro=$req->input('formatoPro');
        $objeto->precioPro=$req->input('precioPro');
        $objeto->imgPro=$req->input('imgPro');

        $objeto->save();
        return redirect()->route('producto.listar');
    }
    
    public function borrar(Request $req,  $producto) 
    {  
        
        
        $productoEspDelete = Producto::find($producto);
        $productoEspDelete->delete();

        return redirect()->route("producto.listar") ;
        
    }


    public function editar(Request $req,  $producto) 
    {  
        
        
        $productoUpdate = Producto::find($producto);
        return view("productos.editar",compact("productoUpdate"));
        

        return redirect()->route("producto.listar") ;
        
    }

    public function guardarEdicion(Request $req,  $producto) 
    {  
        
        
        $productoUpdate = Producto::find($producto);
        $productoUpdate->nomPro=$req->input('nomPro');
        $productoUpdate->tipoPro=$req->input('tipoPro');
        $productoUpdate->formatoPro=$req->input('formatoPro');
        $productoUpdate->precioPro=$req->input('precioPro');
        $productoUpdate->imgPro=$req->input('imgPro');

        $productoUpdate->update();
        return redirect()->route('producto.listar');
        
    }
}