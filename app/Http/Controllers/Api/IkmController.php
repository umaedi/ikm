<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IkmController extends Controller
{
    public function store()
    {
        return response()->json(['status_code', 200]);
    }
}
