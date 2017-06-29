<?php

namespace AP\Repopath\Console;

class MakePolicy extends Generator
{

    protected $signature = 'package:make:policy
						{package : The name of the package to create. Eg: AP/Blog}
						{name : The name of the policy. Eg: Posts}
						{--f|force : Overwrite existing files with generated ones.}';
    protected $description = 'Creates a new policy.';
    protected $type = 'Policy';

    protected function prepareVars()
    {
		$this->updateStubs('policy');
		return $this->initVars();
    }
}