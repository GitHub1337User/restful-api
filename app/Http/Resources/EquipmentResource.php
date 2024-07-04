<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentResource extends JsonResource
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
            'equipment_type_id'=>$this->resource->equipment_type_id,
            'sn'=>$this->resource->sn,
            'comment'=>$this->resource->comment,
            'created_at'=>$this->resource->created_at,
            'upadted_at'=>$this->resource->updated_at,
        ];
        // return parent::toArray($request);
    }
}
