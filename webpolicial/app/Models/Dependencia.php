<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    use HasFactory;
    protected $fillable = [

        'provincia',
         'parroquia',
         'id_usuario',
          'id_distrito',
          'id_circuito',
          'id_subcircuito',
      ];

  public function usuario()
  {
      return $this->belongsTo(Usuario::class, 'id_usuario');
  }

  public function distrito()
  {
      return $this->belongsTo(Distrito::class, 'id_distrito');
  }
  public function circuito()
  {
      return $this->belongsTo(Circuito::class, 'id_circuito');
  }
  public function subcircuito()
  {
      return $this->belongsTo(Subcircuito::class, 'id_subcircuito');
  }
}
