<?php

use App\Models\Brand;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->timestamps();
        });

        Brand::create(['name'=>'VW']);
        Brand::create(['name'=>'Fiat']);
        Brand::create(['name'=>'Alfa Romeo']);
        Brand::create(['name'=>'Lamborghini']);
        Brand::create(['name'=>'Ferrari']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
