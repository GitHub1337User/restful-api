<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
//         «Оборудование» поля: ID, id типа оборудования, серийный номер (уникальное
// поле в связке с типом оборудования), примечание/комментарий.

        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_type_id');
            $table->string('sn');
            $table->string('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
