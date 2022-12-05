<?php

namespace App\Console\Commands;

use App\Imports\SuperheroImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class SuperheroImportCommand extends Command
{
    protected $description = 'Import superhero from CSV';

    protected $signature = 'superhero:import';

    public function handle (): int
    {
        Excel::import(new SuperheroImport(), public_path('superheros.csv'));
        return Command::SUCCESS;
    }
}
