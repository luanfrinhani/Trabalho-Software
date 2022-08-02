<?php

namespace App\Console\Commands\ViewsCommands;

use Illuminate\Console\Command;

class MakeViewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:views {folder_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create default views';

    /**
     * Execute the console commands
     */
    public function handle()
    {
        $this->call('make:index-view', ['name' => $this->argument('folder_name') . '/index.blade']);
        $this->call('make:new-view', ['name' => $this->argument('folder_name') . '/new.blade']);
        $this->call('make:edit-view', ['name' => $this->argument('folder_name') . '/edit.blade']);
    }
}
