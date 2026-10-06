<?php

declare(strict_types=1);

namespace Apps\Notifications\Providers;

use Apps\Notifications\Handlers\SendWelcome;
use Distributable\Providers\ServiceProvider;
use Foundation\Iam\Events\IamEvent;

final class NotificationsServiceProvider extends ServiceProvider
{
    protected array $handlers = [
        IamEvent::UserRegistered->value => [SendWelcome::class],
    ];
}
