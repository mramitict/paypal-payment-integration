<?php

namespace App\Http\Controllers;

use App\Repository\User\IUserRepository;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected $repository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    public function profile()
    {
        return view('setting.profile');
    }

    public function password()
    {
        return view('setting.password');
    }
}
