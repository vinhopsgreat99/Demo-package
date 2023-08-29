<?php
namespace Vinh\Newpkg;

use App\Http\Controllers\AdminController;
use Illuminate\Support\ServiceProvider;
//use Laravel\Fortify\Fortify;

    class NewpkgServiceProvider extends ServiceProvider {
        public function boot() {
            $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
            $this->loadViewsFrom(__DIR__ . '/../resources/views/admin', 'newpkg');

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('/views/vinh/newpkg'),
            ]);

            $this->publishes([
                __DIR__.'/../public' => public_path('vinh/newpkg'),
            ], 'public');

            $this->publishes([
                __DIR__.'/Http/Controllers' => app_path('Http/Controllers/vinh/newpkg'),
            ]);
        }

        public function register()
        {
            // $this->app->bind(HomeController::class);
            // $this->app->bind(AdminController::class);

        }
    }
?>