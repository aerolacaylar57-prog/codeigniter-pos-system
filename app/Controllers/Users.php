<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'id'       => 1,
                'username' => 'admin01',
                'name'     => 'Hans Aerol Acaylar',
                'role'     => 'Administrator',
                'status'   => 'Active',
            ],
            [
                'id'       => 2,
                'username' => 'cashier01',
                'name'     => 'Anna Lopez',
                'role'     => 'Cashier',
                'status'   => 'Active',
            ],
            [
                'id'       => 3,
                'username' => 'cashier02',
                'name'     => 'Mark Rivera',
                'role'     => 'Cashier',
                'status'   => 'Active',
            ],
            [
                'id'       => 4,
                'username' => 'manager01',
                'name'     => 'John Santos',
                'role'     => 'Manager',
                'status'   => 'Active',
            ],
            [
                'id'       => 5,
                'username' => 'staff01',
                'name'     => 'Grace Reyes',
                'role'     => 'Staff',
                'status'   => 'Inactive',
            ],
        ];

        return view('users/index', $data);
    }
}