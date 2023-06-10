<?php

namespace App\Http\Controllers;

use App\Models\EtiquetaPers;
use Illuminate\Http\Request;

class EtiquetaPersController extends Controller
{
    //
    public function listar(Request $req) 
    {       

        
        return view("etiquetasPers.main", ["datos" => EtiquetaPers::Encargo()->get() ]) ;
    }

    

    public function crear(Request $req) 
    {
        // TODO
        return view("etiquetasPers.crear");
    }

    public function guardar(Request $req) 
    {
        // TODO
        $objeto = new EtiquetaPers;
        $objeto->idUsu=auth()->user()->idUsu;
        $objeto->nomTienEtiq=$req->input('nomTienEtiq');
        $objeto->localiTienEtiq=$req->input('localiTienEtiq');
        $objeto->numTelfTienEtiq=$req->input('numTelfTienEtiq');

        $objeto->save();
        return redirect()->route('etiquetaPers.listar');
    }
    
    public function borrar(Request $req,  $etiquetaPers) 
    {  
        
        
        $etiquetaPersDelete = EtiquetaPers::find($etiquetaPers);
        $etiquetaPersDelete->delete();

        return redirect()->route("etiquetaPers.listar") ;
        
    }


    public function editar(Request $req,  $etiquetaPers) 
    {  
        
        
        $etiquetaPersUpdate = EtiquetaPers::find($etiquetaPers);
        return view("etiquetasPers.editar",compact("etiquetaPersUpdate"));
        

        return redirect()->route("etiquetaPers.listar") ;
        
    }

    public function guardarEdicion(Request $req,  $etiquetaPers) 
    {  
        
        
        $etiquetaPersUpdate = EtiquetaPers::find($etiquetaPers);
        $etiquetaPersUpdate->idUsu=auth()->user()->idUsu;
        $etiquetaPersUpdate->nomTienEtiq=$req->input('nomTienEtiq');
        $etiquetaPersUpdate->localiTienEtiq=$req->input('localiTienEtiq');
        $etiquetaPersUpdate->numTelfTienEtiq=$req->input('numTelfTienEtiq');

        $etiquetaPersUpdate->update();
        return redirect()->route('etiquetaPers.listar');
        
    }
}

