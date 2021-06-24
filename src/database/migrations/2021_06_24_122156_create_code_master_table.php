<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('code_master', function (Blueprint $table) {
        //     // コード値
        //     $table->string('code', '4');
        //     // コード区分
        //     $table->string('code_kbn', '30');
        //     // コード名称
        //     $table->string('code_name', '60');
        //     // 属性1
        //     $table->string('attribute_1', '60');
        //     // 属性2
        //     $table->string('attribute_2', '60');
        //     // 登録/更新日時
        //     $table->timestamps();
        //     // 複合PK
        //     $table->primary(['code', 'code_kbn']);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('code_master');
    }
}
