<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            // コメントID
            $table->id();
            // 投稿ID
            $table->foreignId('post_id')->constrained('posts', 'post_id')->onDelete('cascade');
            // ユーザID
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');
            // コメント
            $table->text('comment', '150');
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
        Schema::dropIfExists('comments');
    }
}
