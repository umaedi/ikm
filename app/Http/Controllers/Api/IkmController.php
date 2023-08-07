<?php

namespace App\Http\Controllers\Api;

use App\Services\IkmService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IkmController extends Controller
{
    protected $IkmService;
    public function __construct()
    {
        $this->IkmService = new IkmService();
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'      => 'required|max:255',
            'no_tlp'    => 'required|max:13'
        ]);

        if ($validator->fails()) {
            return response()->json(['status_code' => 404, 'data' => $validator]);
        }

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
