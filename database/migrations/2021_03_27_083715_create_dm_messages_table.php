<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DmMessages', function (Blueprint $table) {
            $table->integer('id',true);
            $table->datetime('send_date')->nullable();
            $table->integer('to_user');
            $table->integer('from_user');
            $table->string('msg',255)->nullable();
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
        Schema::dropIfExists('DmMessages');
    }
}
