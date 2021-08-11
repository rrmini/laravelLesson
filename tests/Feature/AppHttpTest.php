<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppHttpTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_app_home_status()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_app_name_root_status()
    {
        $response = $this->get(route('root'));
        $response->assertStatus(200);
    }

    public function test_app_category_list_show()
    {
        $response = $this->get(route('category'));
        $response->assertStatus(200);
    }

    public function test_app_category_list_is_view()
    {
        $response = $this->get(route('category'));
        $response->assertViewIs('category.index');
    }

    public function test_app_fail_route_status($route = 'categories')
    {
        $response = $this->get($route);
        $response->assertStatus(404);
    }

    public function test_app_category_news_list_show_status($categoryId='1')
    {
        $response = $this->get('category/show/'.$categoryId);
        $response->assertStatus(200);
    }

    public function test_app_category_incorrect_id_news_list_show_status($categoryId='asd')
    {
        $response = $this->get('category/show/'.$categoryId);
        $response->assertStatus(404);
    }

}
