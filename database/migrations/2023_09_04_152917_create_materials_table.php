<?php

use App\Models\Material;
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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

    $materials = [
        'lana',
        'cotone',
        'seta',
        'viscosa',
        'pelle'
    ];

foreach($materials as $material){

Material::create([
    'name' => $material
]);



}

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');

    }
};
