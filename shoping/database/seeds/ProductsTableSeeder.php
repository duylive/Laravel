<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new\App\Product();
        $product->name = "Sản phẩm 001";
        $product->description = "Sản phẩm có mã số 001";
        $product->price = 100.000;
        $product->image = "Image 001";
        $product->view_count = 0;
        $product->save();

        $product = new\App\Product();
        $product->name = "Sản phẩm 002";
        $product->description = "Sản phẩm có mã số 002";
        $product->price = 200.000;
        $product->image = "Image 002";
        $product->view_count = 0;
        $product->save();

        $product = new\App\Product();
        $product->name = "Sản phẩm 003";
        $product->description = "Sản phẩm có mã số 003";
        $product->price = 300.000;
        $product->image = "Image 003";
        $product->view_count = 0;
        $product->save();

        $product = new\App\Product();
        $product->name = "Sản phẩm 004";
        $product->description = "Sản phẩm có mã số 004";
        $product->price = 400.000;
        $product->image = "Image 004";
        $product->view_count = 0;
        $product->save();
    }
}
