<?php

namespace Tests\Feature\Dashboard;

use App\Enums\LeadStatus;
use App\Models\User;
use Tests\TestCase;

class LeadsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_base_url(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/dashboard');
    }

    public function test_dashboard_auth_middleware(): void
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login');
    }

    public function test_dashboard_overview_page_redirect()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/dashboard');

        $response->assertRedirect('/dashboard/leads/'.LeadStatus::UNQUALIFIED->value);
    }

    public function test_dashboard_qualified_leads_page(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/dashboard/leads/'.LeadStatus::QUALIFIED->value);

        $response->assertOk();
    }

    public function test_dashboard_converted_leads_page(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/dashboard/leads/'.LeadStatus::CONVERTED->value);

        $response->assertOk();
    }
}
