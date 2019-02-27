<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kid_id');
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('isCompleted')->default(false);
            $table->boolean('isCounted')->default(false);
            $table->timestamps();

            $table->foreign('kid_id')
                ->references('id')
                ->on('kids')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goals');
    }
}
