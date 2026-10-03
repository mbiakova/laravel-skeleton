<?php

declare(strict_types=1);

namespace Apps\Analytics\Providers;

use Distributable\Providers\ModuleServiceProvider;
use Illuminate\Console\Scheduling\Schedule;

final class AnalyticsServiceProvider extends ModuleServiceProvider
{
    public function boot(): void
    {
        parent::boot();

        // Scheduled by the module itself, so only a process that runs analytics schedules it.
        $this->callAfterResolving(Schedule::class, fn (Schedule $schedule) => $schedule->command('analytics:compute')->hourly());
    }
}
