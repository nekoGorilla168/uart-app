<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // デフォルト値をNULL
        // NULLを許可する
        Schema::table('users', function (Blueprint $table) {
            $table->string('image_url')->default(null)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // NULLを許可しない
        Schema::table('users', function (Blueprint $table) {
            $table->string('image_url')->nullable(false)->change();
        });
    }
}
