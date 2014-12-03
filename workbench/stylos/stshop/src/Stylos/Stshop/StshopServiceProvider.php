<?php namespace Stylos\Stshop;

use Illuminate\Support\ServiceProvider;

class StshopServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
        public function boot()
	{
		$this->package('stylos/stshop');
		include __DIR__.'/../../routes.php';
	}
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
