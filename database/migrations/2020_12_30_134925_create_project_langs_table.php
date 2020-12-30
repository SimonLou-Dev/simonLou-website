<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_langs', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->boolean('php')->default(false);
            $table->boolean('html')->default(false);
            $table->boolean('css')->default(false);
            $table->boolean('scss')->default(false);
            $table->boolean('laravel')->default(false);
            $table->boolean('wordpress')->default(false);
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
        Schema::dropIfExists('project_langs');
    }
}
