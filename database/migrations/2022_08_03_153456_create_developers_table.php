<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string('Developer_Name');
            $table->string('Developer_Email');
            $table->string('Developer_Contact');
            $table->string('Developer_Rule');
            $table->string('Joining_date');
            $table->integer('Developer_salary');
            $table->string('Developer_upi_id');
            $table->string('Developer_skills');
            $table->string('Developer_present_activity');
            $table->tinyInteger('IsDeleted');
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
        Schema::dropIfExists('developers');
    }
}
