<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUselessColumnsToVehicleStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicle_stats', function(Blueprint $table) {
            $table->integer("odo_start")->nullable();
            $table->integer("odo_end")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicle_stats', function(Blueprint $table) {
            $table->dropColumn('odo_start');
        });
        Schema::table('vehicle_stats', function(Blueprint $table) {
            $table->dropColumn('odo_end');
        });
    }
}
