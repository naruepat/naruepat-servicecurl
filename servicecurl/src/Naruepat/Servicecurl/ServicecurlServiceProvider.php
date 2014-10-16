<?php namespace Naruepat\Servicecurl;

use Illuminate\Support\ServiceProvider;

class ServicecurlServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('naruepat/servicecurl');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['servicecurl'] = $this->app->share(function($app)
		{
			return new Servicecurl;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('servicecurl');
	}

}
