<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Response as  Controller;
use Illuminate\Http\Request;

class IkmController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        return $this->sendResponseCreate($data);
    }
}
