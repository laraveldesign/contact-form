<?php

namespace Laraveldesign\ContactForm;

use Illuminate\Support\ServiceProvider;
use Laraveldesign\ContactForm\Livewire\ContactForm;
use Livewire\Livewire;

class ContactFormServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'contact-form');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        Livewire::component('contact-form::contact-form', ContactForm::class);
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/views' => $this->app->resourcePath('views/vendor/contact-form'),
            ], 'contact-form:views');

            $this->publishes([
                __DIR__ . '/../config/contact-form.php' => base_path('config/contact-form.php'),
            ], 'contact-form:config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/contact-form.php', 'contact-form');
    }
}
