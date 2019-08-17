<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Donepending extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donepending', function (Blueprint $table) {
             $table->increments('id');
             $table->text('jobnumber');
             $table->text('description');
             $table->text('cs_name');
             $table->text('ppjkname');
             $table->text('csops');
             $table->text('trackname');
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
        Schema::dropIfExists('donepending');
    }
}
