<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('itemlist',function(Blueprint $table){
            $table->id();
            $table->string('itemcode');
            $table->string('itemname');
            $table->string('brand');
            $table->string('unitcode');
            $table->string('weight');
            $table->string('buy_currency');
            $table->string('buy_price');
            $table->string('sell_currency');
            $table->string('sell_price');
            $table->string('unitprice');
            $table->string('unitgroup');
            $table->string('rackcode');
            $table->string('stock_min');
            $table->string('item_replacement');
            $table->string('percent_demand');
            $table->string('leadtime');
            $table->string('note');
            $table->string('createdby');
            $table->string('createddate');
            $table->string('modifiedby');
            $table->string('modifieddate');
            $table->string('deletedby');
            $table->string('deleteddate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('web_pse_itemlist');
    }
};
