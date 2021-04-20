<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('products')->insert([

        	'name'=>'Automatic Top Load Silver',
        	'price'=>'156000',
        	'description'=>'LG 6.5 kg 5 Star Inverter Fully Automatic Top Load Silver  (T65SKSF4Z)',
        	'category'=>'washing-machine-new',
        	'gallery'=>'https://rukminim1.flixcart.com/image/300/300/k6zda4w0/washing-machine-new/p/r/b/t65sksf4z-lg-original-imafpbmu7sfss4k6.jpeg?q=90',
        ]);
    }
}
