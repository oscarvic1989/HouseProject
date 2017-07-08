<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('houses', function(Blueprint $table)
		    {
		        $table->increments('id');
		        $table->integer('plan');
		        $table->integer('color_1');
				$table->integer('color_2');
		        $table->integer('user_id');
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
