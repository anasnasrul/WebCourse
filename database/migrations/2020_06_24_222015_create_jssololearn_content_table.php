<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJssololearnContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jssololearn_content', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Content_Title');
            $table->string('Content_Subtitle');
            $table->string('Content_Home1');
            $table->string('Content_Home2');
            $table->string('Content_Home3');
            $table->string('Content_Home4');
            $table->string('Content_Home5');
            $table->string('Content_Code1');
            $table->string('Content_Code2');
            $table->string('Content_Code3');
            $table->string('Content_Code4');
            $table->string('Content_Code5');
            $table->string('Content_Picture1');
            $table->string('Content_Picture2');
            $table->string('Content_Picture3');
            $table->string('Content_Picture4');
            $table->string('Content_Picture5');
            $table->string('Content_Note1');
            $table->string('Content_Note2');
            $table->string('Content_Note3');
            $table->string('Content_Note4');
            $table->string('Content_Note5');
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
        Schema::dropIfExists('jssololearn_content');
    }
}
