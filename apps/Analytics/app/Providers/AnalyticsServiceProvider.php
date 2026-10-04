<?php

declare(strict_types=1);

namespace Apps\Analytics\Providers;

use Distributable\Providers\ModuleServiceProvider;
use Illuminate\Console\Scheduling\Schedule;

final class AnalyticsServiceProvider extends ModuleServiceProvider
{
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('analytics:compute')->hourly();
    }
}
