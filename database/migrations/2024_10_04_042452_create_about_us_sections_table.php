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
        Schema::create('about_us_sections', function (Blueprint $table) {
            $table->id();
            $table->string('overview_title')->nullable();
            $table->text('overview_description');
            $table->text('overview_description_2');
            $table->longText('our_mission_image');
            $table->text('our_mission_description');
            $table->text('our_vision_description');
            $table->longText('our_vision_image');
            $table->string('parallax_effect_image'); // Store the path to the banner image
            $table->text('parallax_effect_heading');    // Heading text
            $table->string('meet_our_team_heading');
            $table->json('meet_our_team_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_sections');
    }
};
