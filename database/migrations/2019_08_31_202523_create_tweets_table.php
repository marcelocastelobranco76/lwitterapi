<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetsTable extends Migration
{
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content')->nullable();
            $table->integer('retweets')->nullable();
            $table->integer('likes')->nullable();
            $table->string('account')->nullable();
            $table->string('localizacao')->nullable();
            $table->string('criacao')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
  
    public function down()
    {
        Schema::drop('tweets');
    }
}
