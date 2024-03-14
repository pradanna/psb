<?php

namespace App\Helper;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class CustomController extends Controller
{
    /**
     * @param $field
     *
     * @return string
     */
    public function generateImageName($field = '')
    {
        $value = '';
        if (request()->hasFile($field)) {
            $files     = request()->file($field);
            $extension = $files->getClientOriginalExtension();
            $name      = $this->uuidGenerator();
            $value     = $name . '.' . $extension;
        }

        return $value;
    }

    /**
     * @return string
     */
    public function uuidGenerator()
    {
        return Uuid::uuid1()->toString();
    }

    public function uploadImage($field, $targetName = '', $disk = 'upload')
    {
        $file = request()->file($field);
        return Storage::disk($disk)->put($targetName, File::get($file));
    }
}
