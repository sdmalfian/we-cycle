<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTukarPoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->integer('nasabah_id')->unsigned()->index()->nullable();
            $table->foreign('nasabah_id')->references('id')->on('cms_users')
                ->onDelete('cascade');
            $table->integer('admin_id')->unsigned()->index()->nullable();
            $table->foreign('admin_id')->references('id')->on('cms_users')
                ->onDelete('cascade');
            $table->integer('reward_id')->unsigned()->index()->nullable();
            $table->foreign('reward_id')->references('id')->on('rewards')
                ->onDelete('cascade');
            $table->integer('quantity');
            $table->integer('points_spent');
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
        Schema::dropIfExists('tukar_poin');
    }
}
