<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $fillable = [
            'tipo_vehiculo',
            'placa',
            'chasis',
            'marca',
            'modelo',
            'motor',
            'kilometraje',
            'cilindraje',
            'capacidad_carga',
            'capacidad_pasajeros',
            'id_usuario',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

}
