<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration {

    public function up () {
        Schema::create('Address', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 50)->index();
            $table->string('company', 50)->nullable();
            $table->string('street1', 50)->index();
            $table->string('street2', 50)->index()->nullable();
            $table->string('city', 50)->index()->nullable();
            $table->string('stateProvince', 50)->index()->nullable();
            $table->string('postalCode', 50)->index()->nullable();
            $table->integer('subdivisionId')->default(NULL)->unsigned()->index()->nullable();
            $table->integer('countryId')->unsigned()->index();
            $table->string('phone', 20)->index()->nullable();
            $table->string('email', 50)->index()->nullable();


            // Boilerplate
            $table->integer('statusId')->unsigned()->index()->default(1);
            $table->datetime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'))->index();
            $table->datetime('expiresAt')->default('2038-01-01 01:01:01')->index();
        });

        Schema::table('Address', function (Blueprint $table) {
            $table->foreign('subdivisionId')->references('id')->on('Subdivision');
            $table->foreign('countryId')->references('id')->on('Country');
        });
    }

    public function down () {
        Schema::drop('Address');
    }

}
