<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        $table->integer('user_id')->unsigned()->nullable();
//        $table->string('customer_name');
//        $table->integer('country_id')->unsigned()->nullable();
//        $table->smallInteger('region'); // West Coast, East Coast
//        $table->string('opportunity_name');
//        $table->smallInteger('engagement'); // T&M, Fixed
//        $table->smallInteger('service'); // Testing, Development, Sustanance
//        $table->integer('head_count')->default(0)->unsigned();
//        $table->float('value')->default(0)->unsigned();
//        $table->integer('duration')->default(0)->unsigned();
//        $table->integer('probability')->default(0)->unsigned();
//        $table->dateTime('started_at');

//        $table->integer('head_count')->default(0)->unsigned();
//        $table->float('value')->default(0)->unsigned();
//        $table->integer('month')->default(1)->unsigned();
//        $table->integer('sale_id')->unsigned()->nullable();

        // 1
        $sale_id = DB::table('sales')->insertGetId([
            'user_id' => 1,
            'customer_name' => 'Cisco',
            'country_id' => 210,
            'region' => 0,
            'opportunity_name' => 'Router Testing',
            'engagement' => 0,
            'service' => 0,
            'head_count' => 120,
            'value' => 360000,
            'duration' => 12,
            'probability' => 50,
        		'started_at' => '2015-01-01 00:00:00'
        ]);

        DB::table('values')->insert([
            'head_count' => 10,
            'value' => 30000,
            'month' => 1,
            'sale_id' => $sale_id,
        ]);

        DB::table('values')->insert([
            'head_count' => 10,
            'value' => 30000,
            'month' => 2,
            'sale_id' => $sale_id,
        ]);

        DB::table('values')->insert([
            'head_count' => 10,
            'value' => 30000,
            'month' => 3,
            'sale_id' => $sale_id,
        ]);

        // 2
        $sale_id = DB::table('sales')->insertGetId([
            'user_id' => 2,
            'customer_name' => 'Viscard',
            'country_id' => 210,
            'region' => 1,
            'opportunity_name' => 'SPortal',
            'engagement' => 1,
            'service' => 1,
            'head_count' => 100,
            'value' => 300000,
            'duration' => 12,
            'probability' => 30,
        	'started_at' => '2015-06-01 00:00:00'
        ]);

        DB::table('values')->insert([
            'head_count' => 16.66,
            'value' => 49980,
            'month' => 3,
            'sale_id' => $sale_id,
        ]);
    }
}
