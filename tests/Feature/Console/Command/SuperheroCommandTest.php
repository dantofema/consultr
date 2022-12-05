<?php

namespace Tests\Feature\Console\Command;

use Artisan;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use function Pest\Laravel\assertDatabaseHas;

class SuperheroCommandTest extends TestCase
{
    use DatabaseMigrations;

    public function test_superhero_command_import_csv ()
    {
        $this->assertDatabaseEmpty('superheroes');

        Artisan::call('superhero:import');

        assertDatabaseHas('superheroes', [
            'name' => 'Abraxas',
        ]);
    }
}
