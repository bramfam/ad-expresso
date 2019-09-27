<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{

    if (!Schema::hasTable('billing_accounts')) {
        Schema::create('billing_accounts', function (Blueprint $table){
            $table->bigIncrements('id');
        $table->string('billing_account_id',100)->comment("testing oauth"); // 3332033-1020
        $table->string('billing_name',100)->comment('refers to the account name supplied');
    });
    }


    if (!Schema::hasTable('campaigns')){
        Schema::create('campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name') ;
            $table->string('billing_account_id');
            $table->foreign('billing_account_id')->references('billing_account_id')->on('billing_accounts');
            $table->timestamps();
        });
    }

    if (!Schema::hasTable('tags')){
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tag_key',30)->unique();
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
    Schema::dropIfExists('billing_accounts');
    Schema::dropIfExists('campaigns');
    Schema::dropIfExists('tags');
}
}
