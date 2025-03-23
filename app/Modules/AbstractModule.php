<?php

namespace App\Modules;

use App\Models\PageScan;

abstract class AbstractModule
{
    abstract public function getName(): string;

    abstract public function getChecks(): array;

    public function analyze(PageScan $pageScan): array
    {
        $issues = [];

        foreach ($this->getChecks() as $checkClass) {
            $check = new $checkClass();
            $checkIssues = $check->run($pageScan);
            foreach ($checkIssues as $issue) {
                $issues[] = array_merge($issue, [
                    'module' => $this->getName(),
                ]);
            }
        }

        return $issues;
    }
}
