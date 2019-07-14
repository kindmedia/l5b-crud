<?php

namespace kindmedia\L5BCrud;

use Illuminate\Support\ServiceProvider;

class L5BCrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
		$this->commands('kindmedia\L5BCrud\Console\Commands\L5BCrud');
		$this->commands('kindmedia\L5BCrud\Console\Commands\L5BStub');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
