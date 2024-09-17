<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class LeadSite extends Pivot
{
    protected $table = 'lead_site';

    protected $fillable = [
        'lead_id',
        'site_id',
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
