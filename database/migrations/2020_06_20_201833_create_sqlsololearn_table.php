<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSqlsololearnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sqlsololearn', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('author');
            $table->string('title');
            $table->string('subtitle');
            $table->string('source');                        
            $table->string('content');
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
        Schema::dropIfExists('sqlsololearn');
    }
}
