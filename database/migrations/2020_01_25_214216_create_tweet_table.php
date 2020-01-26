<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetTable extends Migration // this is our newly created table
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweet', function (Blueprint $table) { //table is a blueprint. This is the object we are interacting with.
            $table->bigIncrements('id'); // this is new auto-incrementing column in our table.
            $table->text('content');
            $table->string('author', 50); // laravel replaces varchar with a string, that is max 50 charaters long
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
        Schema::dropIfExists('tweet');
    }
}
