<?php

namespace Tests\Feature\Dashboard;

use App\Enums\LeadStatus;
use App\Models\Lead;
use App\Models\User;
use Tests\TestCase;

class LeadTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_lead_unqualified_to_qualified(): void
    {
        $lead = Lead::factory()->create([
            'status' => LeadStatus::UNQUALIFIED->value,
        ]);

        $response = $this
            ->patch('/dashboard/leads/'.$lead->id, [
                'status' => LeadStatus::QUALIFIED->value,
                'conversion_value' => 100,
            ]);

        $response
            ->assertSessionHasNoErrors();
    }

    public function test_lead_unqualified_to_qualified_or_converted_requires_conversion_value(): void
    {
        $user = User::factory()->create();

        $lead = Lead::factory()->create([
            'status' => LeadStatus::UNQUALIFIED->value,
        ]);

        $response = $this
            ->actingAs($user)
            ->patchJson('/dashboard/leads/'.$lead->id, [
                'status' => LeadStatus::QUALIFIED->value,
            ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors('conversion_value');
    }

    public function test_lead_unqualified_to_converted(): void
    {
        $lead = Lead::factory()->create([
            'status' => LeadStatus::UNQUALIFIED->value,
        ]);

        $response = $this
            ->patch('/dashboard/leads/'.$lead->id, [
                'status' => LeadStatus::CONVERTED->value,
                'conversion_value' => 100,
            ]);

        $response
            ->assertSessionHasNoErrors();
    }

    public function test_lead_qualified_to_unqualified(): void
    {
        $lead = Lead::factory()->create([
            'status' => LeadStatus::QUALIFIED->value,
        ]);

        $response = $this
            ->patch('/dashboard/leads/'.$lead->id, [
                'status' => LeadStatus::UNQUALIFIED->value,
                'conversion_value' => 0,
            ]);

        $response
            ->assertSessionHasNoErrors();
    }

    public function test_lead_qualified_to_converted(): void
    {
        $lead = Lead::factory()->create([
            'status' => LeadStatus::QUALIFIED->value,
        ]);

        $response = $this
            ->patch('/dashboard/leads/'.$lead->id, [
                'status' => LeadStatus::CONVERTED->value,
                'conversion_value' => 100,
            ]);

        $response
            ->assertSessionHasNoErrors();
    }

    public function test_lead_converted_to_unqualified(): void
    {
        $lead = Lead::factory()->create([
            'status' => LeadStatus::CONVERTED->value,
        ]);

        $response = $this
            ->patch('/dashboard/leads/'.$lead->id, [
                'status' => LeadStatus::UNQUALIFIED->value,
                'conversion_value' => 0,
            ]);

        $response
            ->assertSessionHasNoErrors();
    }

    public function test_lead_converted_to_qualified(): void
    {
        $lead = Lead::factory()->create([
            'status' => LeadStatus::CONVERTED->value,
        ]);

        $response = $this
            ->patch('/dashboard/leads/'.$lead->id, [
                'status' => LeadStatus::QUALIFIED->value,
                'conversion_value' => 100,
            ]);

        $response
            ->assertSessionHasNoErrors();
    }
}
