<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth;

class PedidoController extends Controller
{


    public function listar()
    {
        $userId = auth()->user()->idUsu;

        $resultados = DB::table('pedido')
                        ->select('idPedido')
                        ->distinct()
                        ->where('idUsu', $userId)
                        ->get();

        $resultadosAdmin = DB::table('pedido')
        ->select('idPedido','idUsu')
        ->distinct()
        ->get();
        
        
    
        return view('pedidos.main', ["datos" => $resultados],["datosAdmin" => $resultadosAdmin]);
    }




    public function borrar(Request $req,$idPedido)
    {
        $userId = auth()->user()->idUsu;
        $pedido = Pedido::where('idPedido', $idPedido)->where('idUsu',$userId);
        $pedido->delete();
        return redirect()->route("pedido.listar");
    }

    public function borrarFila($idPro)
    {
        
        $userId = auth()->user()->idUsu;
        $idPedido = DB::table('pedido')->select('idPedido')->distinct()->where('idPro', $idPro)->where('idUsu',$userId)->get();
        $pedido = DB::table('pedido')->where('idPro', $idPro)->where('idUsu',$userId)->delete();
        
        return redirect()->back();
    }

    public function crear( $id) 
    {

        $objeto = new Pedido;
        $objeto->idPedido=auth()->user()->idUsu;
        $objeto->idPro=$id;
        $objeto->idUsu=auth()->user()->idUsu;
        $objeto->save();
        
        return redirect()->route('producto.listar');
    }

    
    public function verPedidoActual(Request $req) 
    {  
        return view("pedidos.main", ["datos" => Pedido::Encargo()->get() ]) ;
    }

    
}