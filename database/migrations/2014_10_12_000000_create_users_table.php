<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    // if there's no countries table.. then craete it
        if (!Schema::hasTable('countries')){
            Schema::create('countries', function (Blueprint $table) {
                $table->string('id',2)->unique()->primary();
                $table->string('value',100);
            });
        }

        
        if (!Schema::hasTable('users')){
           Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('company',100);
            $table->string('country_id',2);
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('email',50)->unique();
            $table->string('password',100);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('countries');
        Schema::dropIfExists('users');
    }
}
