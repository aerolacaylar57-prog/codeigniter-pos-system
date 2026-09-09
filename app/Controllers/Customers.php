<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'id'       => 1,
                'name'     => 'Juan Dela Cruz',
                'email'    => 'juan@gmail.com',
                'phone'    => '09171234567',
                'address'  => 'Manila',
            ],
            [
                'id'       => 2,
                'name'     => 'Maria Santos',
                'email'    => 'maria@gmail.com',
                'phone'    => '09181234567',
                'address'  => 'Quezon City',
            ],
            [
                'id'       => 3,
                'name'     => 'Pedro Reyes',
                'email'    => 'pedro@gmail.com',
                'phone'    => '09191234567',
                'address'  => 'Makati City',
            ],
            [
                'id'       => 4,
                'name'     => 'Angela Garcia',
                'email'    => 'angela@gmail.com',
                'phone'    => '09201234567',
                'address'  => 'Pasig City',
            ],
            [
                'id'       => 5,
                'name'     => 'Carlo Mendoza',
                'email'    => 'carlo@gmail.com',
                'phone'    => '09211234567',
                'address'  => 'Taguig City',
            ],
        ];

        return view('customers/index', $data);
    }
}