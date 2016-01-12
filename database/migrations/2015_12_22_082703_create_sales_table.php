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
            $table->smallInteger('region');            
            $table->smallInteger('vertical');
            $table->smallInteger('delivery_location');
            
            $table->string('opportunity_name');
            $table->smallInteger('engagement'); // T&M, Fixed
            $table->smallInteger('service'); // Testing, Development, Sustenance
            $table->float('head_count')->default(0)->unsigned();
            $table->float('value')->default(0)->unsigned();
            $table->integer('duration')->default(0)->unsigned();
            $table->integer('probability')->default(0)->unsigned();
            $table->dateTime('closure_date');
            $table->dateTime('started_at');
            
            
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
