<?php

use function Pest\Laravel\get;

it('gives back successful response while visiting the game', function () {
    // Act and Assert
    get(route('home'))
        ->assertOk();
});
