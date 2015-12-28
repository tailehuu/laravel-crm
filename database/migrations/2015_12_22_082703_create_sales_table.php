<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('customer_name');
            $table->integer('country_id')->unsigned()->nullable();
            $table->smallInteger('region'); // West Coast, East Coast
            $table->string('opportunity_name');
            $table->smallInteger('engagement'); // T&M, Fixed
            $table->smallInteger('service'); // Testing, Development, Sustenance
            $table->float('head_count')->default(0)->unsigned();
            $table->float('value')->default(0)->unsigned();
            $table->integer('duration')->default(0)->unsigned();
            $table->integer('probability')->default(0)->unsigned();
            $table->dateTime('started_at');
            
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
            $table->timestamps();

            // relationship
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales');
    }
}
