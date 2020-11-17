<?php


namespace App\Helpers\File;


use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UploadedFile
{

    const UserImagePathInStorage = 'app/usersImage/';
    const UserDeletedImagePathInStorage = 'app/deletedUserImage/';

    public static function userImagePath(User $user)
    {

        if (!$user->profileImage) {
            return null;
        }

        $in_storage_path = 'app' . DIRECTORY_SEPARATOR . 'usersImage' . DIRECTORY_SEPARATOR . $user->profileImage->name;

        $fullFilePath = storage_path($in_storage_path);

        if (!file_exists($fullFilePath) || !is_readable($fullFilePath)) {
            return null;
        }


        return $fullFilePath;

    }


    /**
     * @param $profileImageName
     */
    public static function deletedUserImage(string $profileImageName)
    {
        try {
            Storage::move(self::UserImagePathInStorage . $profileImageName,
                self::UserDeletedImagePathInStorage . $profileImageName);
        } catch (\Exception $exception) {
            return;
        }
    }
}
