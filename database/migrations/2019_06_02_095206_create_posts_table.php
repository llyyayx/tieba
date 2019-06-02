<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('发帖用户ID');
            $table->string('title')->comment('帖子标题');
            $table->text('content')->comment('帖子内容');
            $table->string('user_name')->comment('发帖用户名');
            $table->string('last_reply_name')->comment('最后回复人的用户名');
            $table->unsignedInteger('comments')->comment('回复次数');
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
        Schema::dropIfExists('posts');
    }
}
