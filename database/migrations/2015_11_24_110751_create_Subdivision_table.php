<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateSubdivisionTable extends Migration {

    public function up () {
        Schema::create('Subdivision', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('countryId')->unsigned()->index();
            $table->integer('subdivisionTypeId')->unsigned()->index();
            $table->string('name', 100)->index();        //->unique();
            $table->string('symbol', 50)->unique();
            $table->string('localSymbol', 50)->index();


            // Boilerplate
            $table->integer('routeTransactionId')->unsigned()->index();
            $table->integer('statusId')->unsigned()->index()->default(1);
            $table->datetime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'))->index();
            $table->datetime('expiresAt')->default('2038-01-01 01:01:01')->index();
        });

        DB::statement("ALTER TABLE Subdivision ADD CONSTRAINT unique_countryId_localSymbol
                          UNIQUE (countryId, localSymbol)");
    }

    public function down () {
        Schema::drop('Subdivision');
    }

}
