<?php

namespace App\Console\Commands;

use App\Models\Site;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GenerateUserSite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:site-generate {userId} {domain}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (! $this->argument('userId') || ! $this->argument('domain')) {
            $this->error('Please provide a user id and a domain');

            return;
        }

        $apiKey = Str::random(80);

        $site = Site::create([
            'user_id' => $this->argument('userId'),
            'domain' => $this->argument('domain'),
            'api_key' => Hash::make($apiKey),
            'api_secret' => Hash::make($apiKey),
            'api_calls' => 0,
        ]);

        $this->info('Site for user '.$site->user_id.' generated successfully: '.$apiKey);
    }
}
