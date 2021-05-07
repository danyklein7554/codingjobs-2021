<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            //primary key : 
            $table->id();

            $table->string('subject');
            $table->string('message');

            // Create the column for FK :
            $table->unsignedBigInteger('flower_id');
            // Create the relation between FK and PK
            $table->foreign('flower_id')->references('id')->on('flowers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
