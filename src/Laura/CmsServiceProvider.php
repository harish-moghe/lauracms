<?php

namespace Laura;

;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Blade;
use view;

class CmsServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        /* --------------------------------------------------------------------------
          | Pulish configuration file
          |-------------------------------------------------------------------------- */

        $this->publishes([
            __DIR__ . '/config.php' => config_path('laura.php'),
        ]);

        if (!$this->app->routesAreCached()) {
            $res = require __DIR__ . '\routes.php';
        }

        $this->loadViewsFrom(__DIR__ . '\views', 'Laura');

//        $migrations = $this->app->make('migration.repository');
//        $migrations->createRepository();
//
//        $migrator = $this->app->make('migrator');
//        $migrator->run(__DIR__ . '\Migrations');
        $this->publishes([
            __DIR__ . '/assets/backend' => public_path('vendor/laura'),
                ], 'public');

        Blade::directive('laurawidget', function($widget_name) {
            return '<?php echo \Laura\Containers\Widget::render('.$widget_name.'); ?>';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $lauraConfig = Config::has('laura');
        if (!$lauraConfig) {
            return;
        }

        $lauraContentTypes = Config::get('laura .content_types');
        if (is_array($lauraContentTypes)) {
            foreach ($lauraContentTypes as $contentTypes) {
                
            }
        }
    }

}
