<?php

namespace AP\Repopath\Console;

class MakeJob extends Generator
{

    protected $signature = 'package:make:job
						{package : The name of the package to create. Eg: AP/Blog}
						{name : The name of the job. Eg: Posts}
						{--f|force : Overwrite existing files with generated ones.}';
    protected $description = 'Creates a new job.';
    protected $type = 'Job';

    protected function prepareVars()
    {
		$this->updateStubs('job');
		return $this->initVars();
    }
}