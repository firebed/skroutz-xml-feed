<?php

namespace Firebed\Skroutz;

use Illuminate\Support\ServiceProvider;

class SkroutzServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerConfig();
        $this->registerViews();
        $this->registerPublishes();
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/skroutz.php', 'skroutz'
        );
    }

    private function registerViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'skroutz');
    }

    private function registerPublishes(): void
    {
        $this->publishes([
            __DIR__ . '/../config/skroutz.php',
        ], 'skroutz-config');
    }
}