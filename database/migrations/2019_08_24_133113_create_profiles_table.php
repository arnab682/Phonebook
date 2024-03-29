<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {

          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->text('bio')->nullable();
          $table->string('web', 100)->nullable();
          $table->string('facebook', 100)->nullable();
          $table->string('twitter', 100)->nullable();
          $table->string('github', 100)->nullable();
          $table->timestamps();
          //$table->foreign('user_id')->references('id')->on('users');
          //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->unique()->unsigned();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
