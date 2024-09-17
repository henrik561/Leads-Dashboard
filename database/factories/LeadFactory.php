<?php

namespace Database\Factories;

use App\Enums\LeadStatus;
use App\Models\LeadInfo;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gclid' => fake()->numberBetween(),
            'email' => fake()->email(),
            'phone_number' => fake()->phoneNumber(),
            'conversion_time' => Carbon::now(),
            'conversion_value' => null,
            'order_id' => fake()->numberBetween(),
            'status' => LeadStatus::UNQUALIFIED->value,
            'lead_info_id' => LeadInfo::factory(),
        ];
    }
}
