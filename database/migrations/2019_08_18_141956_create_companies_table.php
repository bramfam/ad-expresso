<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("company_name");
            $table->string("headquarters");
            $table->text("description");
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('company_name',150)->after("password");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');

        Schema::table('users', function (Blueprint $table) {
            Schema::dropColumn('company_name');
        });
    }
}
