<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('pickup_location');
            $table->string('dropoff_location');
            $table->string('receiver_name');
            $table->string('receiver_contact');
            $table->date('pickup_date');
            $table->time('pickup_time');
            $table->float('weight'); //kg
            $table->float('amount'); //peso
            $table->string('parcel_description'); //note
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
        Schema::dropIfExists('package_details');
    }
}
