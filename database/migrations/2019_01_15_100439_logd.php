<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Logd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logd', function (Blueprint $table) {
            $table->increments('id');
            $table->text('a');
             $table->text('b');
              $table->text('c');
               $table->text('d');
                $table->text('e');
                 $table->text('f');
                  $table->text('g');
                   $table->text('h');
                    $table->text('i');
                     $table->text('j');
                      $table->text('k');
                       $table->text('l');
                        $table->text('m');
                         $table->text('n');
                          $table->text('o');
                           $table->text('p');
                            $table->text('q');
                             $table->text('r');
                              $table->text('s');
                               $table->text('t');
                                $table->text('u');
                                 $table->text('v');
                                  $table->text('w');
                                   $table->text('x');
                                   $table->text('sesion');

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
        Schema::dropIfExists('logd');
    }
}
