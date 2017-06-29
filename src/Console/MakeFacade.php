<?php

namespace AP\Repopath\Console;

class MakeFacade extends Generator
{

    protected $signature = 'package:make:facade
						{package : The name of the package to create. Eg: AP/Blog}
						{name : The name of the facade. Eg: Posts}
						{--f|force : Overwrite existing files with generated ones.}';
    protected $description = 'Creates a new facade.';
    protected $type = 'Facade';

    protected function prepareVars()
    {
		$this->updateStubs('facade');
		return $this->initVars();
    }
}