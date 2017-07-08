<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('condos', function(Blueprint $table)
		    {
		        $table->increments('id');
		        $table->integer('plan');
		        $table->integer('color_1');
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
