<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Jetstream\Http\Livewire\LogoutOtherBrowserSessionsForm;
use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Session\Middleware\StartSession; // Import StartSession middleware

class BrowserSessionsTest extends TestCase
{
    use RefreshDatabase;

   
}
