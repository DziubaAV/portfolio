<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('profile_text');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('social_media');
            $table->string('skills');
            $table->string('skills_lvl');
            $table->string('languages');
            $table->string('languages_lvl');
            $table->string('qualities');
            $table->string('education');
            $table->string('specialization');
            $table->date('education_date')->nullable();
            $table->string('experience');
            $table->string('job_title');
            $table->date('experience_date')->nullable();
            $table->string('training');
            $table->date('training_date')->nullable();
            $table->string('interests');
            $table->string('interests_icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
