<?php

namespace Tests\Feature;

use Tests\TestCase;

class OrdersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_orders_page_view()
    {
        $this->withoutMiddleware();
        $this->withoutExceptionHandling();

        $response = $this->get('admin/order/');

        $response->assertStatus(200);
    }
    public function test_orders_delete()
    {
        $this->withoutMiddleware();
        $this->withoutExceptionHandling();

        $response = $this->get('admin/order/delete/1');

        $response->assertStatus(200);
    }
}