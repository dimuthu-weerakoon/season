<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
        //     $table->string('category');
        //      $table->string('nic')->unique();
        //     $table->string('student_reg_no')->unique();
            $table->string('name');
        //     $table->string('gender');
        //     $table->integer('age');
        //     $table->date('date_of_birth');
        //     $table->string('address');
        //    $table->integer('contact_no');
        //     $table->string('province');
        //     $table->string('district');
        //     $table->integer('postal_code');
        //     $table->string('depot');
        //     $table->string('institute');
        //     $table->string('route_no');
        //     $table->string('starting_point');
        //     $table->string('interchanging_point')->nullable();
        //     $table->string('destination_point');
        //     $table->float('ticket_fee');
            // $table->string('permission_letter');
            $table->string('user_type')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
