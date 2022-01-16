<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members');
            $table->integer('total')->unsigned()->comment("總額");
            $table->string('status',20)->comment('租賃狀態');
            $table->date('rent_date')->comment('租用日');
            $table->date('return_date')->comment('歸還日');
            $table->dateTime('pickup_date')->comment('取貨日');
            $table->integer('clean_fee')->nullable()->unsigned()->comment('清潔費');
            $table->integer('damages')->nullable()->unsigned()->comment('賠償價');
            $table->dateTime('send_date')->comment('送出日期');
            $table->foreignId('manager_id')->index()->comment('交接者');
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
        Schema::dropIfExists('orders');
    }
}
