<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GeneralProfs', function (Blueprint $table) {
            $table->integer('id',true);
            $table->integer('user_id')->index()->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('username',255)->nullable();
            $table->integer('age')->nullable();
            $table->integer('tel')->nullable();
            $table->string('profImg',255)->nullable();
            $table->integer('zip')->nullable();
            $table->string('addr',255)->nullable();
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
        Schema::dropIfExists('GeneralProfs');
    }
}
