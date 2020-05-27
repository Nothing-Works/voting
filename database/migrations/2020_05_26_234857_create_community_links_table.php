<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityLinksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('community_links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('channel_id')->index();
            $table->string('title');
            $table->string('link')->unique();
            $table->boolean('approved')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('community_links');
    }
}
