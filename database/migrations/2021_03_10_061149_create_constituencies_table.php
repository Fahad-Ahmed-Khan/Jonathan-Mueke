<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstituenciesTable extends Migration
{
    /**
     * Run the migrations.  
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constituencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('county_id');
            $table->foreign('county_id')
                ->references('id')
                ->on('counties')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constituencies');
    }
}
