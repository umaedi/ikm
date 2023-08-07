<?php

namespace App\Http\Controllers\Api;

use App\Services\IkmService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Response as Controller;
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
            return $this->sendResponseError($validator->errors());
        }

        $data = $request->except('_token');

        DB::beginTransaction();
        try {
            $this->IkmService->store($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError($th);
        }

        DB::commit();
        return $this->sendResponseCreate($data);
    }
}
