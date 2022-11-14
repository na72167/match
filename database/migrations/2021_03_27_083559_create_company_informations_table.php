<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CompanyInformations', function (Blueprint $table) {
            $table->integer('id',true);
            $table->string('company_name',255)->nullable();
            $table->string('industry',255)->nullable();
            $table->string('company_url',255)->nullable();
            $table->integer('zip1')->nullable();
            $table->integer('zip2')->nullable();
            $table->integer('zip3')->nullable();
            $table->string('location',255)->nullable();
            $table->integer('number_of_employees')->nullable();
            $table->integer('year_of_establishment')->nullable();
            $table->string('representative',255)->nullable();
            $table->integer('listed_year')->nullable();
            $table->integer('average_annual_income')->nullable();
            $table->integer('average_age')->nullable();
            $table->integer('number_of_reviews')->nullable();
            $table->tinyInteger('delete_flg')->default(0);
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CompanyInformations');
    }
}
