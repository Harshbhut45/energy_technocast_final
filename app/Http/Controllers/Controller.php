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
        } else {
            \File::deleteDirectory($app_path);
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

    protected function createFile($app_path, $image, $filename = null, $delete_directory = true)
    {
        if (!file_exists($app_path)) {
            \File::makeDirectory($app_path, 0777, true);
        } else {
            if ($delete_directory) {
                \File::deleteDirectory($app_path, true);
            }
        }

        if ($filename !== null) {
            $file = $filename . '.' . $image->getClientOriginalExtension();
        } else {
            $file_original_name = $image->getClientOriginalName();

            $new_filename = pathinfo($file_original_name, PATHINFO_FILENAME);
            $extension = pathinfo($file_original_name, PATHINFO_EXTENSION);

            $file = $new_filename . '--' . \Str::random(12) . '.' . $extension;
        }

        $image->move($app_path, $file);

        return \URL::to('/data') . '/' . $file;
    }

    protected function render($__php, $__data)
    {
        $obLevel = ob_get_level();
        ob_start();
        extract($__data, EXTR_SKIP);
        try {
            eval('?' . '>' . $__php);
        } catch (Exception $e) {
            while (ob_get_level() > $obLevel) {
                ob_end_clean();
            }

            throw $e;
        } catch (Throwable $e) {
            while (ob_get_level() > $obLevel) {
                ob_end_clean();
            }

            throw new FatalThrowableError($e);
        }

        return ob_get_clean();
    }
}
