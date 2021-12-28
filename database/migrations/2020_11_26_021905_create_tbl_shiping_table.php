<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblShipingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_shiping', function (Blueprint $table) {
            $table->bigIncrements('shiping_id');
            $table->string('shiping_first_name');
            $table->string('shiping_last_name');
            $table->string('shiping_email');
            $table->string('shiping_phone');
            $table->string('shiping_address');
            $table->string ('shiping_city');
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
        Schema::dropIfExists('tbl_shiping');
    }
}
