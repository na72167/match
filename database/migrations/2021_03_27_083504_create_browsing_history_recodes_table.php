<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrowsingHistoryRecodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BrowsingHistoryRecodes', function (Blueprint $table) {

            $table->integer('id',true);
            $table->integer('review_id');
            $table->integer('user_id');
            $table->tinyInteger('delete_flg')->default(0);
            $table->timestamp('browsing_history_date')->CURRENT_TIMESTAMP();
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
        Schema::dropIfExists('BrowsingHistoryRecodes');
    }
}
