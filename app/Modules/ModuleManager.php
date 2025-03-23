<?php

namespace App\Modules;

use App\Modules\Links\LinkModule;

class ModuleManager
{
    protected $modules = [];

    public function __construct()
    {
        $this->registerModules();
    }

    public function registerModules()
    {
        $this->modules = [
            new LinkModule(),
        ];
    }

    public function getModules(): array
    {
        return $this->modules;
    }

    public function getModule(string $name)
    {
        foreach ($this->modules as $module) {
            if ($module->getName() === $name) {
                return $module;
            }
        }

        return null;
    }
}
