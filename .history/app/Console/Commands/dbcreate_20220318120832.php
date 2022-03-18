<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class dbcreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Création de la database, si elle existe alors on la 
    supprime et on la  crée.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $schemaName = $this->arguments
    }
}
