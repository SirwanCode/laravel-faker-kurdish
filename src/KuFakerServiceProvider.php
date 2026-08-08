<?php

namespace sirwancode\laravelfakerkurdish;

use Illuminate\Support\ServiceProvider;

class KuFakerServiceProvider extends ServiceProvider
{
	protected $defer = false;

	public function boot()
	{
	}

	public function register()
	{
		$this->app->bind('KuFaker' , function(){
            return new KuFaker();
        });

	}
}
