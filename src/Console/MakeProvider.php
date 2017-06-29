<?php

namespace AP\Repopath\Console;

class MakeProvider extends Generator
{

    protected $signature = 'package:make:provider
						{package : The name of the package to create. Eg: AP/Blog}
						{name : The name of the provider. Eg: Posts}
						{--f|force : Overwrite existing files with generated ones.}';
    protected $description = 'Creates a new provider.';
    protected $type = 'Provider';

    protected function prepareVars()
    {
		$this->updateStubs('provider');
		return $this->initVars();
    }
}