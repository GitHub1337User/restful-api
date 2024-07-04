<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EquipmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i!=10;$i++){
        DB::table('equipment_types')->insert([
            'name' => "TP-Link TL-WR74 ".$i,
            'sn_mask' => 'XXAAAAAXAA',
        ]);
        DB::table('equipment_types')->insert([
            'name' => "D-Link DIR-300 ".$i,
            'sn_mask' => 'NXXAAXZXaa',
        ]);
        DB::table('equipment_types')->insert([
            'name' => "D-Link DIR-300 E ".$i,
            'sn_mask' => 'NAAAAXZXXX',
        ]);
    }
}
}
