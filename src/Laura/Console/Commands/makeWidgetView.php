<?php

namespace Laura\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class makeWidgetView extends GeneratorCommand {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Laura:make-widget-view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    
    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Widget View';
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub() {
        return __DIR__ . '\\Stubs\\Widget\\View.stub';
    }

    protected function getPath($name) {
        $view_path = $this->laravel['config']['view.paths'][0];
        $name = str_replace($this->laravel->getNamespace(), '', $name);
        return $view_path . '/' . str_replace('\\', '/', $name) . '.blade.php';
    }

}
