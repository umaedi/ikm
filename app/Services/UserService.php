<?php

namespace App\Services;

class UserService
{
    public function update($id, $data)
    {
        $model = \App\Models\User::find($id);

        if (isset($data['newimage'])) {
            $img = $data['newimage'];
            $image_array_1 = explode(";", $img);
            $image_array_2 = explode(",", $image_array_1[1]);
            $base64_decode = base64_decode($image_array_2[1]);
            $image_name = 'img/profile/' . time() . '.png';
            file_put_contents($image_name, $base64_decode);

            if ($model->img != 'avatar.png') {
                unlink($model->img);
            }
            $data['img'] = $image_name;
        } else {
            $data['img'] = $model->img;
        }

        $model->update($data);
        return $model;
    }
}
