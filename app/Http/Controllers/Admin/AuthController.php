<?php

namespace App\Http\Controllers\Admin;

class AuthController extends \App\Http\Controllers\Auth\AuthController
{

    /**
     * define login view
     * @var string
     */
    protected $loginView='admin.auth.login';


    /**
     * define url after login
     * @var string
     */
    protected $redirectTo = '/admin';


    /**
     * define url after logout
     * @var string
     */
    protected $redirectAfterLogout='/admin';

}
