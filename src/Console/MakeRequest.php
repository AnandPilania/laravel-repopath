<?php

namespace AP\Repopath\Console;

class MakeRequest extends Generator
{

    protected $signature = 'package:make:request
						{package : The name of the package to create. Eg: AP/Blog}
						{name : The name of the request. Eg: Posts}
						{--f|force : Overwrite existing files with generated ones.}';
    protected $description = 'Creates a new request.';
    protected $type = 'Request';

    protected function prepareVars()
    {
		$this->updateStubs('request');
		return $this->initVars();
    }
}