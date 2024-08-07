<?php

namespace Saade\FilamentDynamicDashboard\Commands;

use Illuminate\Console\Command;

class FilamentDynamicDashboardCommand extends Command
{
    public $signature = 'filament-dynamic-dashboard';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
