<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuan', function (Blueprint $table) {
            $table->id();
            $table->integer('nhom_tuan')->nullable();
            $table->string('tentuan')->nullable()->unique();
            $table->integer('t_status')->default(0)->index();
            $table->integer('lop_id')->nullable();
            $table->integer('diem_id')->nullable();
            $table->integer('tongdiem')->nullable();
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
        Schema::dropIfExists('tuan');
    }
}
