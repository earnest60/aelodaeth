<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable(); // no need to use this
            $table->string('first_name'); 
            $table->string('last_name'); 
            $table->string('address_line1'); 
            $table->string('address_line2'); 
            $table->string('address_city'); // or town
            $table->string('address_state');  // or county
            $table->string('address_zip');  // or postcode
            $table->string('telephone'); 
            $table->text('notes'); 
            $table->date('ends_at')->nullable()->comment = 'Taken from most recent subscription'; 
            $table->timestamps(); 

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
