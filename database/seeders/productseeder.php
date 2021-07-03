<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name' => 'nokia 1750',
                'price' => '75500',
                'category' => 'laptop',
                'description' => 'this is nixon, 1TB-HDD,8gb-RAM Laptop',
                'gallary' => '/images/nokia.jpg',
            ]
        );
    }
}
