<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('tag_user')){
            Schema::create('tag_user', function (Blueprint $table) {
                $table->integer('tag_id')->unsigned()->index();
                $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
                $table->integer('user_id')->unsigned()->index();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->primary(['tag_id', 'user_id']);
            });
        }
        else { 
            dump("Already created") ; 
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_user');
    }
}
