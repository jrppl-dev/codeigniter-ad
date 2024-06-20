<?php

namespace Core\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class HomeController extends BaseController
{
    public function index(): string|RedirectResponse
    {
        if (session('magicLogin')){
            return redirect()->to('set-password')->with('message', 'Please reset password');
        }

        return view('Core\Home\index');
    }

}
