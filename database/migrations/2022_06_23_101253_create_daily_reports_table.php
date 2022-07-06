<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_reports', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('日報ID');
            $table->unsignedBigInteger('user_id')->comment('ユーザID');
            $table->string('title')->comment('タイトル');
            $table->text('content')->comment('内容');
            $table->dateTime('reporting_time')->comment('レポート提出日');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('daily_reports', function (Blueprint $table) {
            Schema::dropIfExists('daily_reports');
        });
    }
}
