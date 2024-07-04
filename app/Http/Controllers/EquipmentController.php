<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;
use App\Services\EquipmentService;

class EquipmentController extends Controller
{

    protected $equipmentService;

    public function __construct(EquipmentService $equipmentService)
    {
        $this->equipmentService = $equipmentService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        return $this->equipmentService->getAllEquipment();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        return $this->equipmentService->createEquipment($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipment $equipment,$id)
    {
    
        return $this->equipmentService->getEquipmentById($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment $equipment,$id)
    {
        return $this->equipmentService->updateEquipment($id,$request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipment $equipment,$id)
    {
    
        return $this->equipmentService->deleteEquipment($id);
    }
}
