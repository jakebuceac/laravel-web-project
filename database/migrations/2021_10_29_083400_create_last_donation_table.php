<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_donation', function (Blueprint $table) {
            $table->id();
            $table->string('pressure');
            $table->decimal('hemoglobin');
            $table->integer('pulse');
            $table->boolean('covid_test_result');
            $table->boolean('sickle_cell_test');
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
        Schema::dropIfExists('last_donation');
    }
}
