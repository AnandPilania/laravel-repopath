<?php

return [

	'path' => base_path('workbench/'),
	'generate' => [
		'default' => [
			'composer' => 'composer.json',
			'config' => 'config/config.php',
			'provider' => 'src/Providers/{{studly_name}}ServiceProvider.php',
			'facade' => 'src/Facades/{{studly_name}}Facade.php',
			'routes' => 'src/Http/routes.php',
			'controller' => 'src/Http/Controllers/{{studly_name}}Controller.php'
		],
		'full' => [
			'contract' => 'src/Contracts/{{studly_name}}Contract.php',
			'repository' => 'src/Repository/{{studly_name}}Repository.php',
			'model' => 'src/Models/{{studly_name}}Model.php',
			'authmodel' => 'src/Models/{{studly_name}}Model.php',
			'request' => 'src/Http/Requests/{{studly_name}}Request.php',
			'event' => 'src/Events/{{studly_name}}Event.php',
			'listener' => 'src/Listeners/{{studly_name}}Listener.php',
			'job' => 'src/Jobs/{{studly_name}}Job.php',
			'policy' => 'src/Policies/{{studly_name}}Policy.php',
		],
	]
];