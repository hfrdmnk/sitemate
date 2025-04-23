<?php

namespace App\Modules;

use App\Models\Page;

abstract class AbstractModule
{
    abstract public function getName(): string;

    abstract public function getChecks(): array;

    public function analyze(Page $page): array
    {
        $issues = [];

        foreach ($this->getChecks() as $checkClass) {
            $check = new $checkClass();
            $checkIssues = $check->run($page);
            foreach ($checkIssues as $issue) {
                $issues[] = array_merge($issue, [
                    'module' => $this->getName(),
                ]);
            }
        }

        return $issues;
    }
}
