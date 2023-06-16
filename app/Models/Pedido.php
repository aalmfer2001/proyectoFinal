<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';
    protected $primaryKey = 'idInsertPed';


    protected $fillable = [
        'idInsertPed', 'idUsu', 'idPro', 'idPedido'
    ];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'pedido', 'idInsertPed', 'idUsu');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'pedido', 'idInsertPed', 'idPro');
    }

    public function scopeEncargo($query)
    {
        return $query->where("idUsu", auth()->user()->idUsu);
    }


}

