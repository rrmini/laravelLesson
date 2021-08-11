<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminCategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_category_list_status()
    {
        $response = $this->get(route('admin.categories.index'));

        $response->assertStatus(200);
    }

    public function test_admin_category_list_is_view()
    {
        $response = $this->get(route('admin.categories.index'));

        $response->assertViewIs('admin.categories.index');
    }
}
