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
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string("name",120);
            $table->string("code",50)->nullable();
            $table->unsignedBigInteger("department_id");
            $table->unsignedBigInteger("province_id");
            $table->foreign("department_id")->references("id")->on("departments");
            $table->foreign("province_id")->references("id")->on("provinces");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};