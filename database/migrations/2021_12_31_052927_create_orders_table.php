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
            $table->foreignId('member_id')->nullable()->index();
            $table->integer('total')->unsigned()->comment("總額");
            $table->string('status',20)->comment('租賃狀態');
            $table->date('rent_date')->comment('租用日');
            $table->date('return_date')->comment('歸還日');
            $table->dateTime('pickup_date')->comment('取貨日');
            $table->integer('clean_fee')->nullable()->unsigned()->comment('清潔費');
            $table->integer('damages')->nullable()->unsigned()->comment('賠償價');
            $table->foreignId('manager_id')->nullable()->index()->comment('交接者');
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
