<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experiencia extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'titulo',
      'lugar_experiencia',
      'descripcion',
      'fecha_inicial',
      'fecha_final'
    ];
}
