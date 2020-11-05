<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscribers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_last_name');
            $table->string('second_last_name');
            $table->string('sex');
            $table->integer('age');
            $table->string('ocupation');
            $table->string('phone')->nullable();
            $table->string('universiti');
            $table->string('email')->unique();
            $table->boolean('has_previous_financial_experience');
            $table->boolean('suscribed');
            $table->boolean('terms_accepted');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suscribers');
    }
}
