<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'domain',
        'api_key',
        'api_secret',
        'customer_id',
        'conversion_action_id',
        'api_calls',
    ];

    public function increaseApiUsage(): void
    {
        $this->api_calls++;
        $this->save();
    }

    public function leads()
    {
        return $this->belongsToMany(Lead::class)->using(LeadSite::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getCustomerId(): ?string
    {
        return $this->customer_id;
    }

    public function getConversionActionId(): ?string
    {
        return $this->conversion_action_id;
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($site) {
            // Detach leads from the site
            $site->leads()->detach();
        });

        static::deleted(function ($site) {
            $site->leads()->each(function ($lead) {
                if ($lead->sites()->count() === 0) {
                    $lead->delete();
                }
            });
        });
    }
}
