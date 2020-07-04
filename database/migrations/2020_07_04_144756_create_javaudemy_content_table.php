<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJavaudemyContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('javaudemy_content', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Content_Title');
            $table->string('Content_Subtitle');
            $table->string('Content_Home1');
            $table->string('Content_Home2');
            $table->string('Content_Home3');
            $table->string('Content_Home4');
            $table->string('Content_Home5');
            $table->string('Content_Home6');
            $table->string('Content_Home7');
            $table->string('Content_Home8');
            $table->string('Content_Home9');
            $table->string('Content_Home10');
            $table->string('Content_Picture1');
            $table->string('Content_Picture2');
            $table->string('Content_Picture3');
            $table->string('Content_Picture4');
            $table->string('Content_Picture5');
            $table->string('Content_Picture6');
            $table->string('Content_Picture7');
            $table->string('Content_Picture8');
            $table->string('Content_Picture9');
            $table->string('Content_Picture10');
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
        Schema::dropIfExists('javaudemy_content');
    }
}
