<?php


namespace App\Helpers\File;


use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HandleFile
{
    const UserImageDisk = 'userImage';
    const UserDeletedImagePathInStorage = 'app/deletedUserImage/';


    public static function saveUserImage(UploadedFile $file)
    {
        return $file->storeAs('', self::generateUserImageName($file), self::UserImageDisk);
    }


    public static function userImagePath(User $user)
    {
        if (!$user->profileImage) {
            return null;
        }

        $fullFilePath = Storage::disk(self::UserImageDisk)->path($user->profileImage->name);
        if (!file_exists($fullFilePath) || !is_readable($fullFilePath)) {
            return null;
        }
        return $fullFilePath;
    }


    public static function deletedUserImage(User $user)
    {
        try {
            Storage::move(self::userImagePath($user),
                self::UserDeletedImagePathInStorage . $user->profileImage->name);
        } catch (\Exception $exception) {
            return;
        }
    }


    private static function generateUserImageName(UploadedFile $file)
    {
        return Str::random(40) . '.' . $file->extension();
    }


}
