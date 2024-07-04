<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i!=10;$i++){
        DB::table('equipment')->insert([
            'equipment_type_id' => rand(0,10),
            'sn' => 'IFSDF4321fdcv',
            'comment'=>'Comment 1'
        ]);
        
    }
    }
}
