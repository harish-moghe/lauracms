<?php

namespace Laura\Console\Commands;;

use Illuminate\Console\GeneratorCommand;

class makeWidgetModel extends GeneratorCommand {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Laura:make-widget-model {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected $type = 'Widget Model';
    
    protected function getStub() {
        return __DIR__ . '\\Stubs\\Widget\\Model.stub';
    }

    protected function getDefaultNamespace($rootNamespace) {
        return $rootNamespace . '\Models\Widgets';
    }

}
