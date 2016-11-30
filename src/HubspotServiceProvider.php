<?php
namespace Moiz2050\Hubspot;

use Illuminate\Support\ServiceProvider;
use Moiz2050\Hubspot\Hubspot;

class HubspotServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //Bind the Hubspot wrapper class
        $this->app->bind(Hubspot::class, function ($app) {
            return Hubspot::create(env('HUBSPOT_API_KEY'));
        });
    }
}
