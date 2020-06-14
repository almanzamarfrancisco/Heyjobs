<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            // Personal Data
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('rfc', 14)->nullable();
            $table->string('password');
            // Occupation Information
            $table->json('working_schedule')->defalut('{SU:{"start":"00:00", "end": "00:00"},MO:{"start":"00:00", "end": "00:00"},TU:{"start":"00:00", "end": "00:00"},WE:{"start":"00:00", "end": "00:00"},TH:{"start":"00:00", "end": "00:00"},FR:{"start":"00:00", "end": "00:00"},SA:{"start":"00:00", "end": "00:00", "Emergency":"No"}')->nullable();// {SU:{"start":"00:00", "end": "00:00"},MO:...,TU:...,WE:...,TH:...,,FR:..,SA:..}
            $table->boolean('professional')->nullable();
            $table->boolean('mobility')->nullable();
            $table->boolean('home_service')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('provider');
    }
}