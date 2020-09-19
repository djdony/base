<?php

use Laravel\Jetstream\Features;

return [

    'stack' => 'livewire',

    'features' => [
        Features::profilePhotos(),
        //Features::api(),
        Features::teams(),
    ],

];
