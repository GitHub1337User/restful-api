<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->resource->id,
            'name'=>$this->resource->name,
            'sn_mask'=>$this->resource->sn_mask,
            'created_at'=>$this->resource->created_at,
            'upadted_at'=>$this->resource->updated_at,
        ];
    }
}
