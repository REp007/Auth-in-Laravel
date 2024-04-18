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
        Schema::create('activite_eleve', function (Blueprint $table) {
            $table->foreignId('activite_id')->constrained('activites');
            $table->foreignId('eleve_id')->constrained('eleves');
            $table->timestamps();

            // Optionally, add a composite primary key
            $table->primary(['eleve_id', 'activite_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activite_eleve');
    }
};
