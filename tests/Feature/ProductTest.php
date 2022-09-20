<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function insertProductTest()
    {
        $data = [
            'product_name' => 'item1',
            'image' => 'item',
            'price' => 100,
            'barcode' => '12345',
            'quantity' => '10',
            'status' => 1,
        ];

        $product = Product::create($data);

    }

}