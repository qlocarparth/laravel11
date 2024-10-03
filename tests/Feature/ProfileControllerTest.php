<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class ProfileControllerTest extends TestCase
{
    protected $user;

    protected function setUp(): void
    {
        parent::setUp();
        // Create a user for testing and assign it to the property
        $this->user = User::first() ?: User::factory()->create(); // Create user if none exists
        $this->actingAs($this->user); // Authenticate user
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class); // Disable CSRF protection
    }

    public function test_edit_displays_profile_form()
    {
        $response = $this->get(route('profile.edit'));
        $response->assertStatus(200);
        $response->assertViewIs('profile.edit');
        $response->assertViewHas('user', $this->user);
    }
}
