<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return ['nombre'=>$this->nombre,
            'color' =>$this->color,
            'tamano' =>$this->tamano,
            'peso' =>$this->peso,
            'tamano_pico'=>$this->tamano_pico,
            'tamano_alas' =>$this->tamano_alas,
            'tipo' =>$this->tipo,
            'horario_caza' =>$this->horario_caza,
            'esperanza_vida' =>$this->esperanza_vida,
            'habitat' =>$this->habitat,
            'vuela' =>$this->vuela,
            'cantante' =>$this->cantante,
            'region' =>$this->region,
            'descripcion' =>$this->descripcion
            
            ];
    }
}
