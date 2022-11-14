<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributorProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ContributorProfs', function (Blueprint $table) {
            $table->integer('id',true)->change();
            $table->integer('user_id')->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('username',255)->nullable();
            $table->integer('age')->nullable();
            $table->integer('tel')->nullable();
            $table->integer('zip')->nullable();
            $table->string('addr',255)->nullable();
            $table->string('affiliation_company',255)->nullable();
            $table->string('incumbent',255)->nullable();
            $table->string('currently_department',255)->nullable();
            $table->string('currently_position',255)->nullable();
            $table->tinyInteger('dm_state')->default(0);
            $table->tinyInteger('delete_flg')->default(0);
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
        Schema::dropIfExists('ContributorProfs');
    }
}
