<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curriculo_id');
            $table->integer('company_id');
            $table->text('brand');
            $table->string('reference_name');
            $table->string('function');
            $table->string('company_name');
            $table->string('reference_email');

            $table->foreign('curriculo_id')->references('id')->on('curriculos');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('references');
    }
};
