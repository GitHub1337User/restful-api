<?php 

namespace App\Services;

use App\Models\Equipment;
use App\Http\Resources\EquipmentCollection;
use App\Http\Resources\EquipmentResource;

class EquipmentService
{
    public function getAllEquipment()
    {
        $equipment = Equipment::all();
        return new EquipmentCollection($equipment);
    }

    public function getEquipmentById($id)
    {
        $equipment = Equipment::findOrFail($id);
        return new EquipmentResource($equipment);
    }

    public function createEquipment($data)
    {
    
        $equipment = Equipment::insert($data);
        return new EquipmentCollection($equipment);
    }

    public function updateEquipment($id, $data)
    {
        $equipment = Equipment::findOrFail($id);
        $equipment->update($data);
        return new EquipmentResource($equipment);
    }

    public function deleteEquipment($id)
    {
        Equipment::findOrFail($id)->delete();
        return response()->json(['message' => 'Post deleted'], 200);
    }
}
