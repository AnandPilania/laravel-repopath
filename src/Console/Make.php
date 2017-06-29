<?php

namespace AP\Repopath\Console;

class Make extends Generator
{
	protected $signature = 'package:make
							{package : The name of the package to create. Eg: AP/Blog}
							{--f|force : Overwrite existing files with generated ones.}
							{--a|full : Generate complete structured package.}';
	protected $description = 'Make Repopath';
	protected $type = 'Package';
	protected $stubs = [
		'config' => 'config/config.php',
		'composer' => 'composer.json',
		'dev.provider' => 'src/{{studly_name}}ServiceProvider.php',
		'dev.facade' => 'src/{{studly_name}}Facade.php',
		'controller' => 'src/Http/Controllers/{{studly_name}}Controller.php',
		'routes' => 'src/Http/routes.php',
	];
	
	protected function prepareVars()
    {
		$packageCode = $this->argument('package');
        $parts = explode('/', $packageCode);

        if (count($parts) != 2) {
            $this->error('Invalid package name, either too many slashes or not enough.');
            $this->error('Example name: VendorName/packageName');
            return;
        }


        $packageName = array_pop($parts);
        $vendorName = array_pop($parts);

        return [
			'name' => $packageName,
            'package'   => $packageName,
            'vendor' => $vendorName,
        ];
    }
}