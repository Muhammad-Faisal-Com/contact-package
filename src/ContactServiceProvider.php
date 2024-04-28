<?php
namespace ContactTest\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views/','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/Migration/');
//        $this->mergeConfigFrom(__DIR__.'/config/', 'contact');
//        $this->publishes([
//
//        ]);
        $this->publishes([
            __DIR__ . '/database/Migration/2024_04_28_085840_create_contacts_table.php' => database_path('migrations/2024_04_28_085840s_create_contacts_table.php_create_Contact_table.php')
        ], 'migration');
    }
    public function register(){

    }
}
