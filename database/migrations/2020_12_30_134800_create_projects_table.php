<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('main_img');
            $table->string('title');
            $table->integer('client_id');
            $table->longText('description');
            $table->string('longtext');
            $table->integer('type');
            $table->integer('user_rate');
            $table->integer('client_rate');
            $table->boolean('ispublic')->default(false);
            $table->integer('status');
            $table->string('gitlink');
            $table->string('hostedby');
            $table->longText('hosted_infos');
            $table->boolean('in_wait');
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
        Schema::dropIfExists('projects');
    }
}
