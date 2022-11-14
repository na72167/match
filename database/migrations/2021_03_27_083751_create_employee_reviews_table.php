<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EmployeeReviews', function (Blueprint $table) {
            $table->integer('id',true);
            $table->integer('employee_id')->index();
            $table->integer('review_company_id')->index();
            $table->string('joining_route',255)->nullable();
            $table->string('occupation',255)->nullable();
            $table->string('position',255)->nullable();
            $table->string('enrollment_period',255)->nullable();
            $table->string('enrollment_status',255)->nullable();
            $table->string('employment_status',255)->nullable();
            $table->string('welfare_office_environment',255)->nullable();
            $table->integer('working_hours');
            $table->string('holiday',255)->nullable();
            $table->string('in_company_system',255)->nullable();
            $table->string('corporate_culture',255)->nullable();
            $table->string('ease_of_work_for_women',255)->nullable();
            $table->string('rewarding_work',255)->nullable();
            $table->string('image_gap',255)->nullable();
            $table->string('business_outlook',255)->nullable();
            $table->string('strengths_and_weaknesses',255)->nullable();
            $table->string('annual_income_salary',255)->nullable();
            $table->string('general_estimation_title',255)->nullable();
            $table->string('general_estimation',255)->nullable();
            $table->string('username',255)->nullable();
            $table->integer('like_count')->default(0);
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
        Schema::dropIfExists('EmployeeReviews');
    }
}
