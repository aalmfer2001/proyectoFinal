<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoEsp extends Model
{
    use HasFactory;

    protected $table="productoEsp";

    protected $primaryKey="idProEsp";

    public function muchosuno()
    {
        return $this->belongsTo("App\Models\User", "idProEsp","idUsu" )
                    ;
    }

    public function scopeEncargo($query)
    {
        return $query->where("idUsu", auth()->user()->idUsu);
    }

}
