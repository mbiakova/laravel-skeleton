<?php

declare(strict_types=1);

namespace Apps\Iam\Providers;

use Apps\Iam\Services\IamService;
use Distributable\Providers\ModuleServiceProvider;
use Foundation\Iam\Contracts\IamService as Contract;

final class IamServiceProvider extends ModuleServiceProvider
{
    protected array $services = [
        Contract::class => IamService::class,
    ];
}
