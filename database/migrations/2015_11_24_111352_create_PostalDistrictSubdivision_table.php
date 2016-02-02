<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePostalDistrictSubdivisionTable extends Migration {

    public function up () {
        Schema::create('PostalDistrictSubdivision', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('postalDistrictId')->unsigned()->index();
            $table->integer('subdivisionId')->unsigned()->index();


            // Boilerplate
            $table->integer('statusId')->unsigned()->index()->default(1);
            $table->datetime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'))->index();
            $table->datetime('expiresAt')->default('2038-01-01 01:01:01')->index();
        });

    }

    public function down () {
        Schema::drop('PostalDistrictSubdivision');
    }

}
