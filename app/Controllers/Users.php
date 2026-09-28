<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController
{
    protected UserModel $userModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $this->userModel->orderBy('id', 'DESC')->findAll(),
        ]);
    }

    public function new()
    {
        return view('users/new', [
            'title' => 'New User',
        ]);
    }

    public function create()
    {
        $rules = [
            'username'  => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
            'full_name' => 'required|min_length[2]|max_length[100]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->userModel->insert([
            'username'   => $this->request->getPost('username'),
            'full_name'  => $this->request->getPost('full_name'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/users')
            ->with('success', 'User account created successfully.');
    }

    public function edit(int $id)
    {
        $user = $this->userModel->find($id);

        if (! $user) {
            throw PageNotFoundException::forPageNotFound('User not found.');
        }

        return view('users/edit', [
            'title' => 'Edit User',
            'user'  => $user,
        ]);
    }

    public function update(int $id)
    {
        $user = $this->userModel->find($id);

        if (! $user) {
            throw PageNotFoundException::forPageNotFound('User not found.');
        }

        $rules = [
            'username' => [
                'label' => 'Username',
                'rules' => "required|min_length[3]|max_length[50]|is_unique[users.username,id,{$id}]",
            ],
            'full_name' => 'required|min_length[2]|max_length[100]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
        ];

        $avatar = $this->request->getFile('avatar');

        if ($avatar && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
            $avatarRules = [
                'avatar' => [
                    'label' => 'Profile picture',
                    'rules' => [
                        'uploaded[avatar]',
                        'is_image[avatar]',
                        'mime_in[avatar,image/jpg,image/jpeg,image/png]',
                        'ext_in[avatar,jpg,jpeg,png]',
                        'max_size[avatar,2048]',
                    ],
                ],
            ];

            if (! $this->validate($avatarRules)) {
                return redirect()->back()
                    ->withInput()
                    ->with('errors', $this->validator->getErrors());
            }

            $uploadDirectory = FCPATH . 'uploads/avatars';

            if (! is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0755, true);
            }

            $filename = $avatar->getRandomName();

            service('image')
                ->withFile($avatar->getTempName())
                ->fit(300, 300, 'center')
                ->save($uploadDirectory . DIRECTORY_SEPARATOR . $filename);

            $data['avatar'] = $filename;
        }

        $this->userModel->update($id, $data);

        return redirect()->to('/users')
            ->with('success', 'User account updated successfully.');
    }
}