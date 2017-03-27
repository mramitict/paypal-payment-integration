<?php
/**
 * Created by Amit Kumar.
 * User: TWS-013
 * Date: 9/1/2016
 * Time: 3:42 PM
 */

namespace App\Repository\User;

Interface IUserRepository
{
    public function createOrUpdate(array $data, $id = null);
}