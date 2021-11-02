<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('affiliation')->nullable();
            $table->string('biography');
            $table->string('photo')->nullable();
            $table->string('socialNetworks')->nullable();
            $table->string('pageLink')->nullable();
            $table->string('speakerType');
            $table->boolean('isActive')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speakers');
    }
}
