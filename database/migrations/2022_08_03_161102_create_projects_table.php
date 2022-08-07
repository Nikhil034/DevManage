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
            $table->string('Client_Name');
            $table->string('Client_Email');
            $table->string('Project_title');
            $table->string('Project_details');
            $table->integer('Project_budget');
            $table->integer('Project_duration');
            $table->string('Projetc_lead_by');
            $table->integer('Lead_contact');
            $table->string('Technology_use');
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
        Schema::dropIfExists('projects');
    }
}
