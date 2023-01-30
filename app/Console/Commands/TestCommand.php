<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\OpenTelemetry\Facades\Measure;

class TestCommand extends Command
{
    protected $signature = 'test';

    public function handle()
    {
        Measure::start('my-test');

        sleep(1);

        Measure::stop('my-test');

        $this->info('All done!');
    }
}
