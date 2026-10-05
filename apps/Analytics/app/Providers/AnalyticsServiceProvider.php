<?php

declare(strict_types=1);

namespace Apps\Analytics\Providers;

use Apps\Analytics\Handlers\RecordSignup;
use Distributable\Providers\ServiceProvider;
use Foundation\Iam\Events\IamEvent;
use Illuminate\Console\Scheduling\Schedule;

final class AnalyticsServiceProvider extends ServiceProvider
{
    protected array $handlers = [
        IamEvent::UserRegistered->value => [RecordSignup::class],
    ];

    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('analytics:compute')->hourly();
    }
}
