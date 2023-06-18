<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    //
    public function listar(Request $req)
{
    $productos = Producto::paginate(8);

    return view("productos.main", ["datos" => $productos]);
}

public function visualizar($id)
{
    $userId = DB::table('producto')
    ->join('pedido', 'pedido.idPro', '=', 'producto.idPro')
    ->select('pedido.idUsu')->first()->idUsu;
    $proPedido = DB::table('producto')
        ->join('pedido', 'pedido.idPro', '=', 'producto.idPro')
        ->select('producto.*')
        ->distinct()
        ->where('idPedido', $id)
        ->where('idUsu',$userId)
        ->get();

        
        

    return view('pedidos.visualizar', ["datos" => $proPedido]);
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