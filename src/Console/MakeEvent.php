<?php

namespace AP\Repopath\Console;

class MakeEvent extends Generator
{

    protected $signature = 'package:make:event
						{package : The name of the package to create. Eg: AP/Blog}
						{name : The name of the event. Eg: Posts}
						{--f|force : Overwrite existing files with generated ones.}
						{--l|listener : Also create listener for event.}';
    protected $description = 'Creates a new event.';
    protected $type = 'Event';

    protected function prepareVars()
    {
		if($this->option('listener')){
			$this->updateStubs(['event', 'listener']);
		}else{
			$this->updateStubs('event');
		}
		
		return $this->initVars();
    }
}