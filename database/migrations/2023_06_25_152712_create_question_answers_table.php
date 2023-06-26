<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('question_answers', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->text('answer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('question_answers');
    }

};
