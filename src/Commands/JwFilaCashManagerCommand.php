<?php

namespace JohnWink\JwFilaCashManager\Commands;

use Illuminate\Console\Command;

class JwFilaCashManagerCommand extends Command
{
    public $signature = 'jw-fila-cash-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
