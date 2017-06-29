<?php

namespace AP\Repopath\Console;

class MakeController extends Generator
{

    protected $signature = 'package:make:controller
						{package : The name of the package to create. Eg: AP/Blog}
						{name : The name of the controller. Eg: Posts}
						{--f|force : Overwrite existing files with generated ones.}';
    protected $description = 'Creates a new controller.';
    protected $type = 'Controller';

    protected function prepareVars()
    {
		$this->updateStubs('controller');
		return $this->initVars();
    }
}