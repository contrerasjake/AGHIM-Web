<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_details_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('tracking_no');
            $table->integer('delivery_status'); //status of delivery (0-picked up, 1-in transit, 2-delivered);
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
        Schema::dropIfExists('tracking_details');
    }
}
