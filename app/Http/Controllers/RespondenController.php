<?php

namespace App\Http\Controllers;

use App\Services\IkmService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Response as Controller;

class RespondenController extends Controller
{
    protected $ikm;
    public function __construct()
    {
        $this->ikm = new IkmService();
    }
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $ikm = $this->ikm->Query();
            $page = \request()->get('pagination', 10);

            if ($request->search) {
                $ikm->where('nama', 'like', '%' . $request->search . '%');
            }

            $data['table'] = $ikm->paginate($page);
            return view('responden._data_table', $data);
        }
        $data['title']     = 'Data Responden';
        return view('responden.index', $data);
    }

    public function show($id)
    {
        $data['responden'] = $this->ikm->find($id);
        $data['title']     = 'Detail Responden';
        return view('responden.show', $data);
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $this->ikm->destroy($id);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError(json_encode($th));
        }

        DB::commit();
        return $this->sendResponseDelete($id);
    }

    public function export()
    {
        dd('ok');
    }
}
