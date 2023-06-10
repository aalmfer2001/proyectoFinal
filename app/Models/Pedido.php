<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';
    protected $primaryKey = ['idPro', 'idUsu'];
    public $incrementing = false;

    protected $fillable = [
        'idPedido','idPro', 'idUsu', 'totalPedi', 'localiPedi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUsu');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'idPro');
    }

    public function scopeEncargo($query)
    {
        return $query->where("idUsu", auth()->user()->idUsu);
    }


}

