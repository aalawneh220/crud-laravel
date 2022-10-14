<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_models', function (Blueprint $table) {
            $table->id();
            $table->mediumText('book_title');
            $table->mediumText('book_description');
            $table->string('book_author');
            $table->mediumText('book_image');
        });
    }

    //     id 
    // book_title
    // book_description
    // book_auther
    // book_image

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_models');
    }
};
