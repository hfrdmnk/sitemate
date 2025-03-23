<?php

namespace App\Modules\Links;

use App\Modules\AbstractModule;
use App\Modules\Links\Checks\BrokenLinkCheck;

class LinkModule extends AbstractModule
{
    public function getName(): string
    {
        return 'links';
    }

    public function getChecks(): array
    {
        return [
            BrokenLinkCheck::class,
        ];
    }
}
