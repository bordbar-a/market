<?php


namespace App\Services\User\UserCreateService;

use App\Models\User;

class UserCreateService
{

    protected $userData;


    public function __construct(array $data)
    {
        $this->userData['first_name'] = $data['firstName'];
        $this->userData['last_name'] = $data['lastName'];
        $this->userData['email'] = $data['email'];
        $this->userData['mobile'] = $data['mobile'];
        $this->userData['national_code'] = $data['nationalCode'];
        $this->userData['role'] = $data['role'];
        $this->userData['status'] = $data['status'];
        $this->userData['password'] = $data['password'];
    }


    public function perform()
    {

        $user = User::create($this->userData);
        if ($user) {
            return $user;
        }

        throw new \Exception('کاربرایجاد نشد');

    }


}
