<?php

namespace singsys\Facebook;
use Illuminate\Support\ServiceProvider;
use singsys\Facebook\Library\Facebook;

class FacebookServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function boot() {
		$this->loadRoutesFrom(__DIR__ . "/routes.php");
		$this->publishes([
			__DIR__ . '/Config/facebook.php' => config_path('facebook.php'),
		]);
	}

	public function register() {
		$this->app->bind('fbm', function ($app) {
			return new Facebook(config('facebook.facebook'));
		});
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */

}
