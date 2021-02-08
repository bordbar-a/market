<?php

namespace App\Http\Controllers\Admin\User;

use App\Helpers\File\HandleFile;
use App\Helpers\FlashMessages\FlashMessages;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserEditRequest;
use App\Models\File;
use App\Models\Permission;
use App\Models\User;
use App\Services\User\UserCreateService\UserCreateService;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class UsersController extends AdminBaseController
{


    public function all()
    {

        $all_users = User::all();
        return view('admin.users.list', compact('all_users'));
    }


    public function create()
    {
        $userRoles = User::getUserRoles();
        $userStatuses = User::getUserStatuses();
        $permissions = Permission::all();
        return view('admin.users.create', compact('userRoles' ,'userStatuses' , 'permissions'));
    }


    public function store(UserCreateRequest $request)
    {

        $userData = [
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'nationalCode' => $request->input('nationalCode'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
            'status' => $request->input('status'),
        ];


        $userCreateService = new UserCreateService($userData);
        $user = $userCreateService->perform();
        if ($user) {
            $this->handleUserImage($request, $user);
            $user->refreshPermissions($request->input('permissions'));
            FlashMessages::success('کاربر با موفقیت ثبت گردید');
        } else {
            FlashMessages::error('کاربر با موفقیت ثبت گردید');
        }
        return redirect()->route('admin.user.list');

    }


    public function delete(Request $request, $user)
    {
        if (!$user instanceof User) {
            FlashMessages::error('کاربر حذف نشد');
            return redirect()->route('admin.user.list');
        }

        $user->delete();
        FlashMessages::success('کاربر با موفقیت حذف شد');
        return redirect()->route('admin.user.list');


    }


    public function edit(Request $request, $user)
    {



        if (!$user instanceof User) {
            FlashMessages::error('کاربر مورد نظر یافت نشد');
            return view('admin.users.list');
        }


        $user->load('permissions');
        $userRoles = User::getUserRoles();
        $userStatuses = User::getUserStatuses();
        $permissions = Permission::all();
        return view('admin.users.edit', compact('user', 'userRoles' , 'userStatuses' , 'permissions'));

    }


    public function update(UserEditRequest $request, $user)
    {
        if (!$user instanceof User) {
            FlashMessages::error('کاربر مورد نظر پیدا نشد');
            return redirect()->route('admin.user.list');
        }

        $userData = $this->userDataForm($request);


        if($request->filled('password')){
            $userData['password'] = $request->input('password');
        }
        $result = $user->update($userData);


        $user->refreshPermissions($request->input('permissions'));

        $this->handleUserImage($request, $user);

        if ($result){
            FlashMessages::success('ویرایش انجام شد');
        } else{
            FlashMessages::error('ویرایش انجام نشد');
        }

        return back();

    }

    private function handleUserImage(Request $request, User $user): void
    {
        if (!$request->hasFile('image')) {
            return;
        }

        $file = $request->file('image');
        $image = HandleFile::saveUserImage($file);

        if (!$image) {
            return;
        }


        if (!$user->profileImage) {
            $user->profileImage()->save(new File(['name' => $image, 'type' => File::ProfileImage]));
            return;
        }


        HandleFile::deletedUserImage($user->profileImage->name);
        $user->profileImage()->update([
            'name' => $image,
            'type' => File::ProfileImage
        ]);
        return;
    }

    /**
     * @param UserEditRequest $request
     * @return array
     */


    private function userDataForm(UserEditRequest $request): array
    {
        $userData = [
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'national_code' => $request->input('nationalCode'),
            'role' => $request->input('role'),
            'status' => $request->input('status'),
        ];
        return $userData;
    }
}
