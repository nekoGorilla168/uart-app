<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_tags', function (Blueprint $table) {
            // ID
            $table->id();
            // 投稿ID
            $table->foreignId('post_id')->constrained('posts', 'post_id')->onDelete('cascade');
            // タグID
            $table->foreignId('tag_id')->constrained('tags', 'tag_id')->onDelete('cascade');
            // 登録/更新日時
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
        Schema::dropIfExists('posts_tags');
    }
}
