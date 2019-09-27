<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GetProjectsContributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('projects')){
            Schema::create('projects', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->text('project_description');
                $table->dateTime('deadline_date'); 
                $table->timestamps();
            });     
        }

        if (!Schema::hasTable('milestones')){
            Schema::create('milestones', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->text('milestone_description');
                $table->unsignedInteger('project_id');
                $table->foreign('project_id')->references('id')->on('projects');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('contributors')){
            Schema::create('contributors', function (Blueprint $table) {
                $table->unsignedInteger('user_id');
                $table->unsignedInteger('contributor_key');
                $table->string('display_name',100);
                $table->string('phone_number',20);
                $table->foreign('user_id')->references('id')->on('users');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('milestones');
        Schema::dropIfExists('contributors');
    }
}
