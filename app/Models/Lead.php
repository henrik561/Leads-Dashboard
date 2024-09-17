<?php

namespace App\Models;

use App\Enums\LeadStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'gclid',
        'email',
        'phone_number',
        'conversion_time',
        'conversion_value',
        'order_id',
        'status',
        'lead_info_id',
    ];

    public function leadInfo()
    {
        return $this->belongsTo(LeadInfo::class);
    }

    public function sites()
    {
        return $this->belongsToMany(Site::class);
    }

    public function changeStatus(?string $status, ?string $conversionValue = null): void
    {
        $this->update([
            'status' => ! empty($status) ? $status : $this->status,
            'conversion_value' => ! empty($conversionValue) ? $conversionValue : $this->conversion_value,
        ]);
    }

    public function canQualify(): bool
    {
        return $this->status == LeadStatus::QUALIFIED->value || $this->status == LeadStatus::CONVERTED->value;
    }

    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($lead) {
            $leadInfo = $lead->leadInfo;
            if ($leadInfo && $leadInfo->leads()->count() === 0) {
                $leadInfo->delete();
            }
        });
    }
}
