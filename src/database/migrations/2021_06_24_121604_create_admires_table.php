<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admires', function (Blueprint $table) {
            // ID
            $table->id();
            // 投稿UD
            $table->foreignId('post_id')->constrained('posts', 'post_id')->onDelete('cascade');
            // ユーザID
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');
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
        Schema::dropIfExists('admires');
    }
}
