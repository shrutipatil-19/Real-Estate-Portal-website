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
        Schema::create('buyers_guides', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->longText('image');
            $table->string('Years_of_experience');
            $table->string('amenities');
            $table->string('happy_clients');
            $table->string('house_sold');
            $table->string('home_loan_title');
            $table->json('home_loan_details')->nullable();
            $table->json('tax_benefits_details')->nullable();
            $table->string('nri_info_title');
            $table->json('nri_info_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers_guides');
    }
};
