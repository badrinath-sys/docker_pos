<?php

namespace Tests\Feature;

use Tests\TestCase;

class CustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_customer_page_view()
    {
        $this->withoutMiddleware();
        $this->withoutExceptionHandling();

        $response = $this->get('admin/customer/');

        $response->assertStatus(200);
    }
    public function test_customer_delete()
    {
        $this->withoutMiddleware();
        $this->withoutExceptionHandling();

        $response = $this->get('admin/customer/delete/6');

        $response->assertStatus(200);
    }

}
