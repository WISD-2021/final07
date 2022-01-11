<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->comment('器材名稱');
            $table->string('eqinformation')->comment('器材資訊');
            $table->integer('allcount')->unsigned()->comment('總數量');
            $table->integer('rentcount')->unsigned()->comment('目前租出數量');
            $table->integer('inventory')->unsigned()->comment('庫存數量');
            $table->integer('price')->unsigned()->comment('器材單價');
            $table->integer('rentprice')->unsigned()->comment('租借價格(單項兩天一夜價格)');
            $table->integer('claimprice')->unsigned()->comment('賠償單價');
            $table->string('img')->comment('圖片');
            $table->integer('cleanfee')->unsigned()->comment('清潔費');
            $table->date('maintain')->nullable()->comment('保養日期');
            $table->foreignId('manager_id')->nullable()->index()->comment('保養者');
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
        Schema::dropIfExists('equipments');
    }
}
