<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewPollingUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_polling_units', function (Blueprint $table) {
           $table->string("result_id")->nullable;
           $table->string("score")->nullable;
           $table->string("Party_name")->nullable;
           $table->string("name")->nullable; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_polling_units', function (Blueprint $table) {
            //
        });
    }
}
