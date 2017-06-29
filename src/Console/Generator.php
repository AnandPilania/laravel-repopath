<?php

namespace AP\Repopath\Console;

use AP\Support\Generator as Base;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

abstract class Generator extends Base
{
	protected $stubsPath = 'stubs';
	protected $confFile = __DIR__.'/../../config/config.php';
	
	protected function initVars()
	{
		$packageCode = $this->argument('package');

        $parts = explode('/', $packageCode);
        $package = array_pop($parts);
        $vendor = array_pop($parts);

        $name = $this->argument('name');

        return [
            'name' => $name,
            'vendor' => $vendor,
            'package' => $package
        ];
	}
	
	protected function prepareVars(){}
	
	protected function getInput()
    {
        return $this->argument('package');
    }

    protected function getArguments()
    {
        return [
            ['package', InputArgument::REQUIRED, 'The name of the package to create. Eg: Anutiger/Blog'],
        ];
    }

    protected function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_NONE, 'Overwrite existing files with generated ones.'],
			['full', null, InputOption::VALUE_NONE, 'Generate complete structured package.'],
        ];
    }
}