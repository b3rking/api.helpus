<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHandicapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handicaps', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('adress');
            $table->string('mobile_number');
            $table->integer('year_of_birth');
            $table->integer('ecocash_number')->nullable();
            $table->integer('lumicash_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->longText('story');
            $table->integer('needed_money');
            $table->string('state_of_health');
            $table->string('main_image');
            $table->string('first_primary_image')->nullable();
            $table->string('second_primary_image')->nullable();
            $table->string('donation_status')->nullable();
            $table->integer('user_id');
            $table->string('family_situation');
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
        Schema::dropIfExists('handicaps');
    }
}
