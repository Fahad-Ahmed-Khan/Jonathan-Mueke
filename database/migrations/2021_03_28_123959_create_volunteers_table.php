<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->unsignedBigInteger('county_id');
            $table->foreign('county_id')
                ->references('id')
                ->on('counties')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('constituency_id');
            $table->foreign('constituency_id')
                ->references('id')
                ->on('constituencies')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('volunteer_category_id');
            $table->foreign('volunteer_category_id')
                ->references('id')
                ->on('volunteer_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('volunteers');
    }
}
