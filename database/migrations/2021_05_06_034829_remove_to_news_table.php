<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveToNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            //
            Schema::drop('news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            //
            Schema::create('news', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->date('date');
                $table->longText('img');
                $table->longText('content');
                $table->integer('views');
                $table->timestamps();
            });
        });
    }
}
