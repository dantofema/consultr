<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('get superhero', function () {
    $response = $this->get('/api/v1/superhero');

    $response->assertStatus(200);
});

test('get superhero with filter parameter', function () {
    $response = $this->get('/api/v1/superhero?filter=Abraxas');

    $response->assertStatus(200);
});
