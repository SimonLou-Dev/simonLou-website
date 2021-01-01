<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectBoardItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_board_items', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->mediumText('name');
            $table->integer('category');
            $table->integer('priority')->default(1);
            $table->boolean('front')->default(false);
            $table->boolean('back')->default(false);
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
        Schema::dropIfExists('project_board_items');
    }
}
