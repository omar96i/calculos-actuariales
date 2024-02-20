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
        Schema::create('mort_m_s', function (Blueprint $table) {
            $table->id();
            $table->integer('edad')->nullable();
            $table->integer('lx')->nullable();
            $table->integer('dx')->nullable();
            $table->string('qx', 20)->nullable();
            $table->string('px', 50)->nullable();
            $table->string('elx', 20)->nullable();
            $table->string('ex', 20)->nullable();
            $table->string('mx', 10)->nullable();
            $table->string('dx_2', 30)->nullable();
            $table->string('cx', 20)->nullable();
            $table->string('nx', 30)->nullable();
            $table->string('mx_2', 50)->nullable();
            $table->string('vax', 40)->nullable();
            $table->string('vax12', 40)->nullable();
            $table->string('vax2', 40)->nullable();
            $table->string('vax12_2', 50)->nullable();
            $table->string('vax2_2', 50)->nullable();
            $table->string('rj_14', 50)->nullable();
            $table->string('rj_13', 50)->nullable();
            $table->string('rj', 50)->nullable();
            $table->string('ax', 50)->nullable();
            $table->string('w_m', 50)->nullable();
            $table->string('x_m', 50)->nullable();
            $table->string('y_m', 50)->nullable();
            $table->string('z_m', 50)->nullable();
            $table->string('aa_m', 50)->nullable();
            $table->string('ab_m', 50)->nullable();
            $table->string('ac_m', 50)->nullable();
            $table->string('ad_m', 50)->nullable();
            $table->string('ae_m', 50)->nullable();
            $table->string('af_m', 50)->nullable();
            $table->string('ag_m', 50)->nullable();
            $table->string('ah_m', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mort_m_s');
    }
};
