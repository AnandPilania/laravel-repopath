<?php

namespace AP\Repopath;

use AP\Support\ServiceProvider;

class RepopathServiceProvider extends ServiceProvider
{
	protected $namespace = 'AP\\Repopath\\Console\\';
	protected $commands = [
		'Make' => 'command.repopath.make',
		'MakeFacade' => 'command.repopath.make.facade',
		'MakeProvider' => 'command.repopath.make.provider',
		'MakeController' => 'command.repopath.make.controller',
		'MakeRequest' => 'command.repopath.make.request',
		'MakeMiddleware' => 'command.repopath.make.middleware',
		'MakeModel' => 'command.repopath.make.model',
		'MakeAuthModel' => 'command.repopath.make.model.auth',
		'MakeContract' => 'command.repopath.make.contract',
		'MakeRepository' => 'command.repopath.make.repository',
		'MakeEvent' => 'command.repopath.make.event',
		'MakeListener' => 'command.repopath.make.listener',
		'MakeJob' => 'command.repopath.make.job',
		'MakePolicy' => 'command.repopath.make.policy',
		'Get' => 'command.repopath.get',
	];
	
	public function register()
	{
		foreach($this->commands as $class => $command){
			$this->app->singleton($command, function($app){
				return new $this->namespace.($class);
			});
			$this->commands($this->namespace.$class);
		}		
	}
	
	public function provides()
	{
		$providers = [];
		
		if(!$this->app->environment('production')){
			$providers = array_merge($providers, $this->commands);
		}
		
		return $this->commands;
	}
}