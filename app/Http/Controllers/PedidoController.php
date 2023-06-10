<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{

    public function listar()
    {
        return view('pedidos.main', ["datos" => Pedido::Encargo()->distinct('idPedido')->get()]);
    }

    public function visualizar($id)
    {
        $userId = auth()->user()->idUsu;
        $pedido = DB::table('pedido')
            // ->join('producto', 'pedido.idPro', '=', 'producto.idPro')
            ->select('idPro')
            ->where('idPedido', $id)
            ->where('idUsu',$userId)
            ->get();
        // $producto=Producto::whereIn('idPro', function ($query,$idPro){
        //     $query->select($id)
        //     ->from('pedido');})
        //     ->get();
            
            

        return view('pedidos.visualizar', compact('pedido'));
    }

    public function borrar(Request $req,$idPedido)
    {
        $userId = auth()->user()->idUsu;
        $pedido = Pedido::where('idPedido', $idPedido)->where('idUsu',$userId);
        $pedido->delete();
        return redirect()->route("pedido.listar");
    }
    /*
    public function listar(Request $req) 
    {  
        return view("pedidos.main", ["datos" => Pedido::Encargo()->get() ]) ;
    }

    

    public function crear(Request $req) 
    {
        // TODO
        return view("pedidos.crear");
    }

    public function guardar(Request $req) 
    {
        // TODO
        $objeto = new Pedido;
        $objeto->nomPro=$req->input('nomPro');
        $objeto->tipoPro=$req->input('tipoPro');
        $objeto->formatoPro=$req->input('formatoPro');
        $objeto->precioPro=$req->input('precioPro');
        $objeto->imgPro=$req->input('imgPro');

        $objeto->save();
        return redirect()->route('pedido.listar');
    }
    
    public function borrar(Request $req,  $pedido) 
    {  
        
        
        $pedidoDelete = pedido::find($pedido);
        $pedidoDelete->delete();

        return redirect()->route("pedido.listar") ;
        
    }


    public function editar(Request $req,  $pedido) 
    {  
        
        
        $pedidoUpdate = Pedido::find($pedido);
        return view("pedidos.editar",compact("pedidoUpdate"));
        

        return redirect()->route("pedido.listar") ;
        
    }

    public function guardarEdicion(Request $req,  $pedido) 
    {  
        
        
        $pedidoUpdate = Pedido::find($pedido);
        $pedidoUpdate->nomPro=$req->input('nomPro');
        $pedidoUpdate->tipoPro=$req->input('tipoPro');
        $pedidoUpdate->formatoPro=$req->input('formatoPro');
        $pedidoUpdate->precioPro=$req->input('precioPro');
        $pedidoUpdate->imgPro=$req->input('imgPro');

        $pedidoUpdate->update();
        return redirect()->route('pedido.listar');
        
    }*/
}