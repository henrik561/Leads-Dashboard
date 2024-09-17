<?php

namespace App\Actions\Users;

use App\Models\Site;

class UpdateUserSitesAction
{
    public function execute($user, $sites): void
    {
        if (! $user || ! $sites) {
            return;
        }

        $userSites = collect($sites)->map(function ($site) {
            return Site::firstOrCreate(
                ['domain' => $site['domain']],
                [
                    ...$site,
                ]
            );
        })->pluck('id')->toArray();

        $user->sites()->sync($userSites);

        $orphanedSiteIds = Site::doesntHave('users')->pluck('id');

        if ($orphanedSiteIds->isNotEmpty()) {
            Site::whereIn('id', $orphanedSiteIds)->delete();
        }
    }
}
