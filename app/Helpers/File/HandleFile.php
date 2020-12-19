<?php


namespace App\Helpers\File;


use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Self_;

class HandleFile
{
    const UserImageDisk = 'userImage';
    const ProductImageDisk = 'ProductImages';
    const UserDeletedImagePathInStorage = 'app/deletedUserImage/';


    public static function saveUserImage(UploadedFile $file)
    {
        return $file->storeAs('', self::generateUserImageName($file), self::UserImageDisk);
    }


    public static function saveProductPicture(UploadedFile $file, int $product_id)
    {
        $name = $file->storeAs($product_id, self::generateProductImageName($file), self::ProductImageDisk);
        return ltrim($name, $product_id . '/');

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

    public static function deleteProductImage($product_id, $image_name)
    {
        try {
            Storage::disk(Self::ProductImageDisk)->delete($product_id . DIRECTORY_SEPARATOR . $image_name);
            return true;
        } catch (\Exception $exception) {
            return;
        }
    }


    private static function generateUserImageName(UploadedFile $file)
    {
        return Str::random(40) . '.' . $file->extension();
    }


    private static function generateProductImageName(UploadedFile $file)
    {
        return Str::random(40) . '.' . $file->extension();
    }


}
