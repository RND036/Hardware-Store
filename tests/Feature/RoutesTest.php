<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTest extends TestCase
{
    use RefreshDatabase; // Use this trait to refresh the database after each test

    public function test_home_page_loads()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewIs('pages.home');
    }

    public function test_categories_page_loads()
    {
        $response = $this->get('/categories');
        $response->assertStatus(200);
        $response->assertViewIs('pages.categories');
    }

    public function test_brands_page_loads()
    {
        $response = $this->get('/brands');
        $response->assertStatus(200);
        $response->assertViewIs('pages.brands');
    }

    public function test_services_page_loads()
    {
        $response = $this->get('/services');
        $response->assertStatus(200);
        $response->assertViewIs('pages.services');
    }

    public function test_about_us_page_loads()
    {
        $response = $this->get('/aboutus');
        $response->assertStatus(200);
        $response->assertViewIs('pages.aboutus');
    }

    public function test_contact_us_page_loads()
    {
        $response = $this->get('/contactus');
        $response->assertStatus(200);
        $response->assertViewIs('pages.contactus');
    }

    public function test_other_page_loads()
    {
        $response = $this->get('/other');
        $response->assertStatus(200);
        $response->assertViewIs('pages.other');
    }

    public function test_product_page_loads()
    {
        $response = $this->get('/product');
        $response->assertStatus(200);
    }

    public function test_checkout_page_loads()
    {
        $response = $this->get('/checkout');
        $response->assertStatus(200);
        $response->assertViewIs('pages.checkout');
    }

    public function test_success_page_loads()
    {
        $response = $this->get('/sucess'); 
        $response->assertStatus(200);
        $response->assertViewIs('pages.sucess'); 
    }

    public function test_login_page_loads()
    {
        $response = $this->get('/user');
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }


    public function test_redirects_non_authenticated_users_from_dashboard()
    {
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login'); // Adjust based on your app's redirection
    }
}
