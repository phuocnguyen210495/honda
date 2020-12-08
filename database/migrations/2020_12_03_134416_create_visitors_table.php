<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('ua');
            $table->unsignedBigInteger('visits')->default(0);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('country_name');
            $table->string('region_name');
            $table->string('city_name');
            $table->double('latitude');
            $table->double('longitude');
            $table->unsignedSmallInteger('zip_code');
            $table->boolean('anonymized')->default(false);
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
        Schema::dropIfExists('visits');
    }
}
