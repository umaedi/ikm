<?php

namespace App\Http\Controllers\Api;

use App\Services\IkmService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IkmController extends Controller
{
    protected $IkmService;
    public function __construct()
    {
        $this->IkmService = new IkmService();
    }
    public function store(Request $request)
    {
        $data = $request->except('_token');

        DB::beginTransaction();
        try {
            $this->IkmService->store($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['status_code' => 404, 'data' => $th]);
        }

        DB::commit();
        return response()->json(['status_code' => 200, 'data' => $data]);
    }
}
