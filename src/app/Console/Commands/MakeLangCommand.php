<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeLangCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:lang {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new lang file';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Lang';

    /**
     * @return string
     */
    protected function getStub(): string
    {
        return resource_path('stubs/LangStub.php');
    }

    /**
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\..\resources\lang';
    }
}
