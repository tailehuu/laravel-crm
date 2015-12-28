<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHcValueToSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    	Schema::table('sales', function (Blueprint $table) {
    		$table->float('jan_hc')->default(0)->unsigned();
    		$table->float('jan_val')->default(0)->unsigned();
    		$table->float('feb_hc')->default(0)->unsigned();
    		$table->float('feb_val')->default(0)->unsigned();
    		$table->float('mar_hc')->default(0)->unsigned();
    		$table->float('mar_val')->default(0)->unsigned();
    		$table->float('apr_hc')->default(0)->unsigned();
    		$table->float('apr_val')->default(0)->unsigned();
    		$table->float('may_hc')->default(0)->unsigned();
    		$table->float('may_val')->default(0)->unsigned();
    		$table->float('jun_hc')->default(0)->unsigned();
    		$table->float('jun_val')->default(0)->unsigned();
    		$table->float('jul_hc')->default(0)->unsigned();
    		$table->float('jul_val')->default(0)->unsigned();
    		$table->float('aug_hc')->default(0)->unsigned();
    		$table->float('aug_val')->default(0)->unsigned();
    		$table->float('sep_hc')->default(0)->unsigned();
    		$table->float('sep_val')->default(0)->unsigned();
    		$table->float('oct_hc')->default(0)->unsigned();
    		$table->float('oct_val')->default(0)->unsigned();
    		$table->float('nov_hc')->default(0)->unsigned();
    		$table->float('nov_val')->default(0)->unsigned();
    		$table->float('dec_hc')->default(0)->unsigned();
    		$table->float('dec_val')->default(0)->unsigned();

    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
