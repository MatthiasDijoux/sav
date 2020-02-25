<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExchangesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'commentaires'=>$this->commentaires,
            'Date'=>$this->date_echange,
            'Type'=>$this->exchangesTypes,
            'Client'=>$this->clients,
            'Opérateurs'=>$this->operateurs,
        ];
    }
}
