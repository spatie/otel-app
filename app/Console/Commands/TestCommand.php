<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Spatie\OpenTelemetry\Facades\Measure;

class TestCommand extends Command
{
    protected $signature = 'test';

    public function handle()
    {
        User::create([
            'name' => 'Test user',
            'email' => Str::uuid() . '@spatie.be',
            'password' => 'hack me',
        ]);

        Measure::start('my-test');

        sleep(3);

        Measure::stop('my-test');

        $this->info('All done!');

        Measure::manual('manual', 2000);

        User::create([
            'name' => 'Test user',
            'email' => Str::uuid() . '@spatie.be',
            'password' => 'hack me',
        ]);

        sleep(3);
    }
}
