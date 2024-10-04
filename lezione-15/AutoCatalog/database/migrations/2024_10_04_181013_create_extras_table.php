<?php

use App\Models\Extra;
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
        Schema::create('extras', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->unsignedInteger('price');
            $table->timestamps();
        });

        Extra::create(['name'=>'Cambio automatico','price'=>'500']);
        Extra::create(['name'=>'Hybrid','price'=>'800']);
        Extra::create(['name'=>'Vestri oscurati','price'=>'300']);
        Extra::create(['name'=>'Tergicristallo','price'=>'180']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extras');
    }
};
