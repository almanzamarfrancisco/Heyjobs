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
            $table->json('working_schedule')->defalut('{"SU":{"start":"-","end":"-","slug":"Domingo"},"MO":{"start":"09:00","end":"18:00","slug":"Lunes"},"TU":{"start":"09:00","end":"18:00","slug":"Martes"},"WE":{"start":"09:00","end":"18:00","slug":"Miércoles"},"TH":{"start":"09:00","end":"18:00","slug":"Jueves"},"FR":{"start":"09:00","end":"18:00","slug":"Viernes"},"SA":{"start":"09:00","end":"18:00","slug":"Sábado"},"Emergency":"Yes"}')->nullable();
            $table->boolean('professional')->nullable();
            $table->boolean('mobility')->nullable();
            $table->boolean('home_service')->nullable();
            $table->text('intro')->nullable();
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