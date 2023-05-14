<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $primaryKey="idUsu";

    public function unomuchosProducEsp()
    {
        return $this->hasMany("App\Models\ProductoEsp", "idProEsp","idUsu" )
                    ;
    }

    public function unomuchosEtiq()
    {
        return $this->hasMany("App\Models\EtiquetaPers", "idEtiq","idUsu" )
                    ;
    }

    public function muchoamucho()
    {
        return $this->belongsToMany("App\Models\Producto","pedido","idUsu","idPro")->withPivot('totalPedi', 'localiPedi');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
