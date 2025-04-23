<?php

namespace App\Modules\Links\Checks;

use App\Models\Page;

class BrokenLinkCheck
{
    public function run(Page $page): array
    {
        $issues = [];

        // Do the checks

        return $issues;
    }
}
