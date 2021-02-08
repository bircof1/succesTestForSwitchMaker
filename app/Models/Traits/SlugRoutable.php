<?php

namespace App\Models\Traits;

Trait SlugRoutable {

    public function getRouteKeyName()
    {
        return 'title';
    }
}