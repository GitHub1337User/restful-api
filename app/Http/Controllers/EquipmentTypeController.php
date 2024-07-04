<?php

namespace App\Http\Controllers;

use App\Http\Resources\EquipmentTypeCollection;
use App\Models\Equipment_type;
use Illuminate\Http\Request;
use App\Http\Resources\EquipmentTypeResource;

class EquipmentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipment_type = Equipment_type::paginate(3);
        return new EquipmentTypeCollection($equipment_type);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipment_type $equipment_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipment_type $equipment_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment_type $equipment_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipment_type $equipment_type)
    {
        //
    }
}
