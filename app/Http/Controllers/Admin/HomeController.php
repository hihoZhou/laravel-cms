<?php
namespace App\Http\Controllers\Admin;

/**
 * IndexController.php.
 *
 *
 * @author    hihozhou <hihozhou.github.io>
 * @email     hihozhou@gmail.com
 * Time: 16-7-7 下午4:11
 */
use \App\Http\Controllers\BaseController;
use Auth;
use Illuminate\Http\Request;

class HomeController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth.admin');//登录验证
    }

    /**
     *
     */
    public function index()
    {
        return view('admin.home.index');
    }


}