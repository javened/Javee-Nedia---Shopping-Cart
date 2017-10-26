<?php

use Illuminate\Database\Seeder;

class allNeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = array("/700-bolt.jpg","ANGLE_47cd4eba-4f88-4a74-bbbb-8104d1d0474b.jpg","fcwd-products-electric-guitar-02-hero-strat-1.jpg","images.jpg","IMG_1424.jpg","SteveVaiGuitars_4787.jpg","SteveVaiGuitars_4796.jpg","SteveVaiGuitars_4811.jpg","Taylor-524ce-fr-2016.png","venus-givson-original-imaeff7r7kz9njx5.jpeg");
    	for($i = 0; $i < 10; $i ++){
	    	DB::table('product_categories')->insert([
	            'name' => str_random(10);
	        ]);
    	}

    	for($i = 0; $i < 10; $i ++){
	        DB::table('products')->insert([
	            'name' => "guitar".$i,
	            'descripition' => str_random(100),
	            'path' => $list[$i];
	            'price' => rand(3);
	            'category_id' => $i;
	        ]);
	    }
    }
}
