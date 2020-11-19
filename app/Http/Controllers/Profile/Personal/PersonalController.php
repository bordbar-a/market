<?php

namespace App\Http\Controllers\Profile\Personal;

use App\Entities\FileType;
use App\Helpers\File\UploadedFile;
use App\Helpers\FlashMessages\FlashMessages;
use App\Helpers\UploadFileName\UploadFileName;
use App\Http\Controllers\Profile\ProfileBaseController;
use App\Http\Requests\User\ChangeUserPasswordRequest;
use App\Models\File;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use function Couchbase\basicDecoderV1;

class PersonalController extends ProfileBaseController
{


    public function index()
    {
        $user = User::getUserProfile();
        if ($user) {
            return view('profile.personal.index', compact('user'));
        }
        return redirect()->route('profile.index');
    }


    public function userImage($user_id)
    {

        $user = User::find($user_id);
        $loginUser = Auth::user();
        if (!$user || $loginUser->id != $user->id) {
            return abort(404);
        }
        $userProfileImagePath = UploadedFile::userImagePath($user);
        $file = \Illuminate\Support\Facades\File::get($userProfileImagePath);
        $type = \Illuminate\Support\Facades\File::mimeType($userProfileImagePath);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;

    }

    public function update(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('profile.dashboard');
        }

        $data = [
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'national_code' => $request->input('nationalCode'),
        ];


        $result = $user->update($data);
        $this->handleUserImage($request, $user);


        if ($result) {
            FlashMessages::success('پروفایل شما بروزرسانی شد');
        } else {
            FlashMessages::error('پروفایل شما بروزرسانی نشد');
        }

        return redirect()->back();

    }


    public function deleteProfileImage($user_id){


        $user = User::find($user_id);

        if($user->id != Auth::user()->id){
            return abort(403);
        }

        UploadedFile::deletedUserImage($user->profileImage->name);
        $user->profileImage()->delete();

        return back();
    }



    public function changePassword($user_id)
    {
        $user = User::find($user_id);

        if($user->id ==Auth::user()->id){
            return view('profile.personal.changePassword');
        }

        return redirect()->route('profile.personal.index');

    }

    public function doChangePassword(ChangeUserPasswordRequest $request , $user_id)
    {

        $user = User::find($user_id);

        if(!Hash::check($request->input('password') , $user->password)){

            FlashMessages::error('پسورد وارد شده صحیح نیست');
            return back()->withErrors(['پسورد وارد شده اشتباه است']);
        }

        $user->password = $request->input('newPassword');

        if($user->save()){

            FlashMessages::success('پسورد تغییر کرد');
            return back();
        }

        FlashMessages::error('رمز عبور تغییر نکرد');
        return redirect()->route('profile.index');


    }

    /**
     * @param Request $request
     * @param $user
     * @return void
     */
    private function handleUserImage(Request $request, User $user): void
    {
        if (!$request->hasFile('image')) {
            return;
        }

        $file = $request->file('image');
        $image = $file->storeAs('', UploadFileName::generateUserImageName($file), User::UserImageDisk);

        if (!$image) {
            return;
        }


        if (!$user->profileImage) {
            $user->profileImage()->save(new File(['name' => $image, 'type' => File::ProfileImage]));
            return;
        }


        UploadedFile::deletedUserImage($user->profileImage->name);
        $user->profileImage()->update([
            'name' => $image,
            'type' => File::ProfileImage
        ]);
        return;


    }


}
