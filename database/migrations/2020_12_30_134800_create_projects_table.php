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
            $table->integer('type');
            $table->integer('user_rate');
            $table->integer('client_rate');
            $table->boolean('ispublic')->default(false);
            $table->integer('status');
            $table->string('gitlink')->nullable();
            $table->string('link');
            $table->string('hostedby');
            $table->longText('hosted_infos');
            $table->boolean('in_wait')->default(false);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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
