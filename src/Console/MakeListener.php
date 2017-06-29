<?php

namespace AP\Repopath\Console;

class MakeListener extends Generator
{

    protected $signature = 'package:make:listener
						{package : The name of the package to create. Eg: AP/Blog}
						{name : The name of the listener. Eg: Posts}
						{--f|force : Overwrite existing files with generated ones.}
						{--e|event : Also create event for listener.}';
    protected $description = 'Creates a new listener.';
    protected $type = 'Listener';

    protected function prepareVars()
    {
		if($this->option('event')){
			$this->updateStubs(['listener', 'event']);
		}else{
			$this->updateStubs('listener');
		}
		
		return $this->initVars();
    }

}