<?php

namespace Tests\Feature\Api;

use App\Models\Lead;
use App\Models\Site;
use Carbon\Carbon;
use Tests\TestCase;

class LeadTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_lead_can_be_added_via_api(): void
    {
        $site = Site::factory()->create([
            'api_key' => hash('sha256', 'api_key'),
            'api_secret' => hash('sha256', 'api_secret'),
        ]);

        $leads = Lead::factory(3)->create();

        $site->leads()->attach($leads);

        $response = $this->postJson('/api/v1/leads', [
            'phone_number' => fake()->phoneNumber(),
            'conversion_time' => Carbon::now()->format('Y-m-d\TH:i:sP'),
            'email' => fake()->email(),
            'gclid' => fake()->uuid(),
        ], [
            'X-Api-Key' => 'api_key',
            'X-Api-Secret' => 'api_secret',
        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('leads', [
            'phone_number' => $response['phone_number'],
            'conversion_time' => $response['conversion_time'],
            'email' => $response['email'],
            'gclid' => $response['gclid'],
        ]);

        $this->assertDatabaseHas('lead_site', [
            'lead_id' => $response['id'],
            'site_id' => $site->id,
        ]);
    }
}
