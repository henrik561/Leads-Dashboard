<?php

namespace App\Actions\Leads;

use App\Models\Lead;
use App\Models\LeadInfo;

class Create
{
    public function execute(array $data): Lead
    {
        $leadInfo = $this->createLeadInfoObject($data);

        return Lead::create([
            ...$data,
            'lead_info_id' => $leadInfo->id,
        ]);
    }

    private function createLeadInfoObject(array $data): LeadInfo
    {
        return LeadInfo::create($data);
    }
}
