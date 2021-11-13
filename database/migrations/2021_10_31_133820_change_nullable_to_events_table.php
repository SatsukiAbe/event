<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNullableToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('date', 100)->nullable();
            $table->string('place', 100)->nullable();
            $table->string('cost', 100)->nullable();
            $table->string('time_limit', 100)->nullable();
            $table->string('others', 1000)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('date', 100)->nullable(false);
            $table->string('place', 100)->nullable(false);
            $table->string('cost', 100)->nullable(false);
            $table->string('time_limit', 100)->nullable(false);
            $table->string('others', 1000)->nullable(false);
        
        });
    }
}
