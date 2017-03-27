<?php
/**
 * Created by PhpStorm.
 * User: TWS-013
 * Date: 9/1/2016
 * Time: 3:44 PM
 */

namespace App\Repository\User;

use App\User;

class UserRepository implements IUserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this->user, $method], $args);
    }

    public function createOrUpdate(array $data, $id = null)
    {
        if($id)
        {
            $user = $this->user->findOrFail($id);

            $user->first_name = $data['first_name'];
            $user->middle_name = $data['middle_name'];
            $user->last_name = $data['last_name'];
            $user->email = $data['email'];

            if(isset($data['password'])) {
                $user->password = bcrypt($data['password']);
            }

            $user->save();
        } else {
            $user = $this->user->create([
                'slug' => uniqid(time()),
                'first_name' => $data['first_name'],
                'middle_name' => $data['middle_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'username' => $data['username'],
                'password' => bcrypt($data['password'])
            ]);
        }
        return $user;
    }

    public function assignable()
    {
        $roles = [
            'admin' => ['owner', 'sales', 'support'],
            'owner' => ['inspector', 'staff'],
            'sales' => ['owner'],
            'support' => ['inspector', 'staff'],
            'inspector' => [],
            'staff' => []
        ];
        return $roles['admin'];
        //return $roles[$this->roles->first()->name];
    }
}