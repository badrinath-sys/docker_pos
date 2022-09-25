<?php

namespace Tests\Feature;

use Session;
use Tests\TestCase;

class ProductTest extends TestCase
{
    //use WithoutMiddleware;

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

    public function test_insertProductTest()
    {
        $this->withoutMiddleware();
        $this->withoutExceptionHandling();

        $response = $this->post('admin/product', [
            'product_name' => 'item1',
            'image' => 'item',
            'price' => 100,
            'barcode' => '12345',
            'quantity' => 13,
            'status' => 1,
        ]);
        $response->assertStatus(201);

    }
    public function test_ProductTest()
    {
        $this->withoutMiddleware();
        $this->withoutExceptionHandling();

        $response = $this->get('admin/product');
        $response->assertStatus(200);

    }
    public function test_delete_product()
    {
        $this->withoutMiddleware();
        $this->withoutExceptionHandling();
        $role = Session::get('role');
        if ($role == 'Admin') {
            $response = $this->delete('admin/product/1');
            // $response->assertStatus(200);

        }
        $response->assertStatus(200);

    }

}