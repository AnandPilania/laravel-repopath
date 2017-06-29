<?php

namespace AP\Repopath\Console;

use AP\Support\Json;
use Illuminate\Console\Command;

class Get extends Command
{
    protected $signature = 'package:get';
    protected $description = 'Get list of packages.';
    protected $type = 'Packages';

    public function fire()
	{
		$json = new Json(base_path('modules.json'));
		$this->info($json->get());
	}
}