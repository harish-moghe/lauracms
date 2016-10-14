<?php

namespace Laura\Console\Commands;

use Illuminate\Console\Command;

class makeWidget extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Laura:make-widget {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Laura re-usable component';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Widget';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $nameWidget = $this->argument('name');
        $arguments = array("name" => $nameWidget);
        $this->call("Laura:make-widget-model", $arguments);
        $this->call("Laura:make-widget-view", $arguments);
    }

}
