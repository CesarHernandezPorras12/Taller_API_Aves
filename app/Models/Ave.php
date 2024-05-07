<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelCategoria;

class Ave extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'color',
        'tamano',
        'peso',
        'tamano_pico',
        'tamano_alas',
        'tipo',
        'horario_caza',
        'habitat',
        'vuela',
        'cantante',
        'esperanza_vida',
        'region',
        'descripcion',
        'categoria_id',
    ];
    public function Categorias()
    {
        return $this->belongsTo(ModelCategoria::class);
    }
}
