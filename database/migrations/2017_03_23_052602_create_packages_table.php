<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tagline');
            $table->text('details');
            $table->integer('max_checklist')->unsigned()->nullable();
            $table->integer('max_form')->unsigned()->nullable();
            $table->integer('max_user')->unsigned()->nullable();
            $table->integer('max_space')->unsigned()->nullable();
            $table->integer('max_image')->unsigned()->nullable();
            $table->integer('price');
            $table->tinyInteger('status')
                ->default(0)->comment = "0 => Inactive, 1 => Published, 2 => Active";
            $table->boolean('trial')
                ->default(0)->comment = "0 => No, 1 => Yes";
            $table->boolean('custom')
                ->default(0)->comment = "0 => No, 1 => Yes";
            $table->softDeletes();
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
        Schema::dropIfExists('packages');
    }
}
