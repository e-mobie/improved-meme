<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListingMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('listings', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('title');
          $table->string('category');
          $table->longtext('keywords')->nullable();
          $table->string('city');
          $table->string('state');
          $table->string('zip');
          $table->string('address');
          $table->longtext('details')->nullable();
          $table->string('phone')->nullable();
          $table->string('website')->nullable();
          $table->string('email')->nullable();
          $table->string('facebook')->nullable();
          $table->string('twitter')->nullable();
          $table->string('google')->nullable();
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
        //
    }
}
