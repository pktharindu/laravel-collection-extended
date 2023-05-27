<?php

namespace Pktharindu\LaravelCollectionExtended\Commands;

use Illuminate\Console\Command;

class LaravelCollectionExtendedCommand extends Command
{
    public $signature = 'laravel-collection-extended';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
