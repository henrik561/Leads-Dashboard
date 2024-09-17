<?php

namespace App\Actions\Sites;

use App\Models\Site;
use Illuminate\Support\Str;

class Create
{
    public function execute(string $userId, string $domain, string $customerId, string $conversionActionId): Site
    {
        $apiKey = Str::random(80);

        return Site::create([
            'user_id' => $userId,
            'domain' => $domain,
            'api_key' => $apiKey,
            'customer_id' => $customerId,
            'conversion_action_id' => $conversionActionId,
        ]);
    }
}
