<?php

namespace AP\Repopath\Console;

class MakeMiddleware extends Generator
{

    protected $signature = 'package:make:middleware
						{package : The name of the package to create. Eg: AP/Blog}
						{name : The name of the middleware. Eg: Posts}
						{--f|force : Overwrite existing files with generated ones.}';
    protected $description = 'Creates a new middleware.';
    protected $type = 'Middleware';

    protected function prepareVars()
    {
		$this->updateStubs('middleware');
		return $this->initVars();
    }
}