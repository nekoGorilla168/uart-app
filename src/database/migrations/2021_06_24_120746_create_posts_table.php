<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            // 投稿ID
            $table->id('post_id');
            // ユーザID（FK）
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');
            // タイトル
            $table->string('title', '50');
            // 画像URL
            $table->text('image_url');
            // 本文
            $table->string('body', '1000');
            // 投稿種別
            $table->string('type');
            // 発見場所
            $table->string('location')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
