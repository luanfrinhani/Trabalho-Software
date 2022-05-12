<?php

namespace App\Console\Commands\ViewsCommands;

use Illuminate\Console\GeneratorCommand;

class MakeNewViewCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:new-view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new.blade.php file';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'New view';

    /**
     * @return string
     */
    protected function getStub(): string
    {
        return resource_path('stubs/ViewStub.php');
    }

    /**
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\..\resources\views';
    }
}
