<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

class Producto extends Model
{
    use HasFactory;

    protected $table="producto";

    protected $primaryKey="idPro";

    public function muchoamucho()
{
    return $this->belongsToMany("App\Models\User","pedido","idPro","idUsu")->withPivot('totalPedi', 'localiPedi');
}





}
