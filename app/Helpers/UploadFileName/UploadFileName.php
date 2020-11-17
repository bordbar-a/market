<?php


namespace App\Helpers\UploadFileName;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class UploadFileName
{


    public static function generateUserImageName(UploadedFile $file){
        return Str::random(40) . '.' . $file->extension();
    }

}
