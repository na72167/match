<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->integer('id',true);
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->integer('roll')->default(100);
            $table->tinyInteger('report_flg')->default(0);
            $table->tinyInteger('delete_flg')->default(0);
            $table->timestamp('auth_key_limit')->useCurrent()->nullable();
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
        Schema::dropIfExists('Users');
    }
}
