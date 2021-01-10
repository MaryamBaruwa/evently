<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('type');
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('time');
            $table->string('venue');
            $table->string('city');
            $table->string('state');
            // event details (nullable)
            $table->string('featured_speakers')->nullable();
            $table->string('website')->nullable();
            $table->string('sponsors')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            // event images (nullable)
            $table->string('event_logo')->nullable();
            $table->string('sponsor_image')->nullable();
            $table->string('speakers_image')->nullable();
            // contact information
            $table->string('firstname');
            $table->string('lastname');
            $table->string('company_name');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
