<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('nic');
            $table->string('student_reg_no');
            $table->string('name');
            $table->string('gender');
            $table->string('age');
            $table->string('date_of_birth');
            $table->string('address');
            $table->integer('contact_no');
            $table->string('province');
            $table->string('district');
            $table->integer('postal_code');
            $table->string('depot');
            $table->string('institute');
            $table->string('route_no');
            $table->string('starting_point');
            $table->string('interchanging_point')->nullable();
            $table->string('destination_point');
            $table->float('ticket_fee');
            //$table->float('price');
          //  $table->date('valid_till');
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
        Schema::dropIfExists('seasons');
    }
}
