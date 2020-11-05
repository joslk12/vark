<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuscribersRenameColumnUniversity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('suscribers', function (Blueprint $table) {
            $table->renameColumn('universiti', 'university');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('suscribers', function (Blueprint $table) {
            $table->renameColumn('university', 'universiti');
        });
    }
}
