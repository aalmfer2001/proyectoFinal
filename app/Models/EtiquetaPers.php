<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtiquetaPers extends Model
{
    use HasFactory;

    protected $table="etiquetaPers";

    protected $primaryKey="idEtiq";

    public function unoamuchos()
    {
        return $this->belongsTo("App\Models\User", "idEtiq","idUsu" )
                    ;
    }

    public function scopeEncargo($query)
    {
        return $query->where("idUsu", auth()->user()->idUsu);
    }

}
