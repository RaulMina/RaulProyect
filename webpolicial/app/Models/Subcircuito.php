<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcircuito extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_subcircuito',
        'codigo_subcircuito',
        'numero_subcircuito',
        'id_usuario',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
