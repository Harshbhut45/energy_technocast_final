<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function imageUpload($image, $path, $filename)
    {
        $public_storage_path = 'app/public/';
        $app_path = storage_path($public_storage_path . $path);

        if (!file_exists($app_path)) {
            \File::makeDirectory($app_path, 0777, true);
        }

        $image->move($app_path, $filename);

        $sizes = ['128px', '256px', '512px'];

        $original_image = \Image::make($app_path . '/' . $filename);

        foreach ($sizes as $size) {
            $height = str_replace('px', '', $size);

            if(strpos($size, 'pc') !== false) {
                $height = str_replace('pc', '', $size);
                $height = ($original_image->height() * $height) / 100;
            }

            if (!file_exists($app_path . '/' . $size)) {
                \File::makeDirectory($app_path . '/' . $size, 0777, true);
            }

            $resized_image = \Image::make($app_path . '/' . $filename)
                ->resize(null, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($app_path . '/' . $size . '/' . $filename, 90);
        }

        return [
            'status' => true
        ];
    }
}
