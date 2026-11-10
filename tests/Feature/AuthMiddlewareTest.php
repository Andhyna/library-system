<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    // Guest tidak boleh akses /books → redirect ke /login
    public function test_guest_cannot_access_books(): void
    {
        $response = $this->get('/books');

        $response->assertRedirect('/login');
    }

    // Admin boleh akses /books
    public function test_admin_can_access_books(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($admin)->get('/books');

        $response->assertStatus(200);
    }

    // Petugas boleh akses /books
    public function test_petugas_can_access_books(): void
    {
        $petugas = User::factory()->create(['role' => 'petugas']);

        $response = $this->actingAs($petugas)->get('/books');

        $response->assertStatus(200);
    }

    // Guest yang akses /login dapat melihat form login
    public function test_guest_can_access_login_page(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    // Admin diizinkan mengakses route role:admin
    public function test_admin_allowed_on_admin_role_route(): void
    {
        $this->app['router']->get('/test-admin-only', function () {
            return 'OK';
        })->middleware(['auth', 'role:admin']);

        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($admin)->get('/test-admin-only');

        $response->assertStatus(200);
    }

    // Petugas ditolak dengan HTTP 403 saat akses route role:admin
    public function test_petugas_rejected_with_403_on_admin_role_route(): void
    {
        $this->app['router']->get('/test-admin-only', function () {
            return 'OK';
        })->middleware(['auth', 'role:admin']);

        $petugas = User::factory()->create(['role' => 'petugas']);

        $response = $this->actingAs($petugas)->get('/test-admin-only');

        $response->assertStatus(403);
    }
}
