<?php

namespace App\Services;

use App\Models\Ikm;

class IkmService
{
    public function store($data)
    {
        $store = Ikm::create($data);
        return $store;
    }
}
