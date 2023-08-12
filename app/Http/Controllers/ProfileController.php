<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Response as Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->user = new UserService();
    }

    public function index()
    {
        $data['title'] = 'Profile';
        return view('profile.index', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');

        DB::beginTransaction();
        try {
            $this->user->update($id, $data);
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return $this->sendResponseError(json_encode($th));
        }
        DB::commit();
        return $this->sendResponseUpdate($data);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
