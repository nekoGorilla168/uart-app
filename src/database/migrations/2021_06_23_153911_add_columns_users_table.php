<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // カラム追加
        Schema::table('users', function (Blueprint $table) {
            // 画像URL
            $table->string('image_url');
            // ユーザID名称変更
            $table->renameColumn('id', 'user_id');
            // ユーザ名名称変更
            $table->renameColumn('name', 'user_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // 画像URL
            $table->dropColumn('image_url');
            // ユーザID
            $table->removeColumn('user_id', 'id');
            // ユーザ名名称変更
            $table->renameColumn('user_name', 'name');
        });
    }
}
