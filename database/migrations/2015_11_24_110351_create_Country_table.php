<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCountryTable extends Migration {

    public function up () {
        Schema::create('Country', function (Blueprint $table) {
            $table->integer('currencyId')->unsigned()->index()->nullable();
            $table->integer('continentId')->unsigned()->index();
            $table->increments('id')->unsigned();
            $table->string('name', 30)->unique();
            $table->string('iso2', 2)->unique();
            $table->string('iso3', 3)->unique();
            $table->string('isoNumeric', 3)->index();
            $table->string('fipsCode', 2)->index();
            $table->string('capital', 50)->index()->nullable();
            $table->boolean('isEU')->default(0)->index();
            $table->boolean('isUK')->default(0)->index();
            $table->boolean('isUSTerritory')->default(0)->index();


            // Boilerplate
            $table->integer('statusId')->unsigned()->index()->default(1);
            $table->datetime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'))->index();
            $table->datetime('expiresAt')->default('2038-01-01 01:01:01')->index();
        });
    }

    public function down () {
        Schema::drop('Country');
    }

}
