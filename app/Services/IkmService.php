<?php

namespace App\Services;

use App\Models\Ikm;

class IkmService
{

    public function get()
    {
        $data = Ikm::all();
        return $data;
    }

    public function store($data)
    {
        $store = Ikm::create($data);
        return $store;
    }

    public function find($id)
    {
        $model = Ikm::find($id);
        return $model;
    }

    public function destroy($id)
    {
        $model = Ikm::find($id);
        $model->destroy($id);
        return $model;
    }

    public function Query()
    {
        $query = Ikm::query();
        return $query;
    }
}
