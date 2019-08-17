<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class cs_resc_contr_cs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
