<?php

namespace App\Console\Commands;

use App\Actions\Sites\Create as CreateSiteAction;
use App\Actions\Users\Create as CreateUserAction;
use App\Models\Site;
use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:user-create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user and site';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $username = $this->ask('What is the name of the user?');

        $email = $this->ask('What is the email of the user?');

        while (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error('Invalid email address');
            $email = $this->ask('What is the email of the user?');
        }

        while (User::where('email', $email)->exists()) {
            $this->error('User with this email already exists');
            $email = $this->ask('What is the email of the user?');
        }

        $password = $this->secret('What is the password of the user?');

        while (strlen($password) < 6) {
            $this->error('Password must be at least 6 characters');
            $password = $this->secret('What is the password of the user?');
        }

        $domain = $this->ask('What is the domain of the site?');

        while (! filter_var($domain, FILTER_VALIDATE_URL)) {
            $this->error('Invalid domain');
            $domain = $this->ask('What is the domain of the site?');
        }

        while (Site::where('domain', $domain)->exists()) {
            $this->error('Site with this domain already exists');
            $domain = $this->ask('What is the domain of the site?');
        }

        $customer_id = $this->ask('What is the customer ID of the site?');

        $conversion_action_id = $this->ask('What is the conversion action ID of the site?');

        $user = app(CreateUserAction::class)->execute(
            $username,
            $email,
            $password
        );

        $site = app(CreateSiteAction::class)->execute(
            $user->id,
            $domain,
            $customer_id,
            $conversion_action_id
        );

        $this->info('User and site generated successfully');
        $this->info('User: '.$user->email);
        $this->info('Site ID: '.$site->id);
        $this->info('Site API Key: '.$site->api_key);
    }
}
