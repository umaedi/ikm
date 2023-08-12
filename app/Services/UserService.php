<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class UserService
{
    public function update($id, $data)
    {
        $model = \App\Models\User::find($id);

        if (isset($data['img'])) {
            $img = Storage::putFile('public/profile', $data['img']);
            if ($data['img'] != 'avatar.png') {
                Storage::delete($model->img);
            }
        } else {
            $img = $model->img;
        }
        $data['img'] = $img;

        if (isset($data['password'])) {
            $pass = bcrypt($data['password']);
        } else {
            $pass = $model->password;
        }

        $data['password'] = $pass;

        $model->update($data);
        return $model;
    }
}
