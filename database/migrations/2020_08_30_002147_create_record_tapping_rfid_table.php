<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordTappingRfidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_tapping_rfid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_rfid');
            $table->unsignedBigInteger('id_equipment');
            $table->datetime('time_tap');
            $table->timestamps();
            //foreign key
            $table->foreign('id_rfid')->references('id')->on('rfid')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
            $table->foreign('id_equipment')->references('id')->on('equipment')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_tapping_rfid');
    }
}
