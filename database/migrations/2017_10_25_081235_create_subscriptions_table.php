<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('member_id');
            $table->unsignedInteger('membership_type_id');
            $table->integer('amount')->comment = 'Stored in pennies. /100 for £';
            $table->date('ends_at')->comment = 'Date that subscription ends. the most recent value is copied to the members table.';
            $table->timestamps();
            
            $table->foreign('member_id')->references('id')->on('members');
            $table->foreign('membership_type_id')->references('id')->on('membership_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
