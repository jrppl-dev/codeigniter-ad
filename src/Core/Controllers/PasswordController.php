<?php

namespace Core\Controllers;

use App\Controllers\BaseController;
use Core\Models\UserModel;

class PasswordController extends BaseController
{
    public function set()
    {
        return view('Core\Password\set');
    }

    public function update()
    {
        $rules = [
            'password' => [
                'label' => 'Password',
                'rules' => 'required|strong_password',
            ],
            'password_confirm' => [
                'label' => 'Password Confirmation',
                'rules' => 'required|matches[password]',
            ],
        ];

        if(false === $this->validate($rules)){
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $user = auth()->user();
        $user->password = $this->request->getPost('password');

        $model = new UserModel();
        $model->save($user);

        session()->removeTempdata('magicLogin');

        return redirect()->to('/')->with('message', 'Your password has been changed.');
    }
}
