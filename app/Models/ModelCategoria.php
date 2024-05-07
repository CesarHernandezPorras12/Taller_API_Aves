<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ave;
class ModelCategoria extends Model
{
    protected $table = 'categorias';

    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'cantidad_aves'
    ];
    public function Aves()
    {
        return $this->hasMany(Ave::class);
    }
}

