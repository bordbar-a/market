<?php

namespace App\Http\Controllers\Share\User;

use App\Helpers\File\HandleFile;
use App\Http\Controllers\Controller;
use App\Intervension\DemoFilter;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{
    public function userImage(User $user)
    {
//
//        if (Gate::denies('profile-image' ,$user)) {
//            return abort(403);
//        }

        $userProfileImagePath = HandleFile::userImagePath($user);

        if (is_null($userProfileImagePath)) {
            return Image::canvas(100, 100, '#7d766f')->response();
        } else {
            $img = Image::make($userProfileImagePath);
            return $img->response($img->extension , 100);
        }


//        $userProfileImagePath = HandleFile::userImagePath($user);
//        $file = \Illuminate\Support\Facades\File::get($userProfileImagePath);
//        $type = \Illuminate\Support\Facades\File::mimeType($userProfileImagePath);
//        $response = Response::make($file, 200);
//        $response->header("Content-Type", $type);
//        return $response;

    }


    public
    function deleteProfileImage(
        $user
    ) {

        if (Gate::denies('profile-image', $user)) {
            return abort(403);
        }

        HandleFile::deletedUserImage($user);
        $user->profileImage()->delete();

        return back();
    }
}
