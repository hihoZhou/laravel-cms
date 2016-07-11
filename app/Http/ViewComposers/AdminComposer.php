<?php
/**
 * ProfileComposer.php.
 *
 *
 * @author    hihozhou <hihozhou.github.io>
 * @email     hihozhou@gmail.com
 * Time: 16-5-10 下午5:28
 */

namespace App\Http\ViewComposers;


use Illuminate\Contracts\View\View;
use Request;
use Auth;
use Session;

class AdminComposer
{

    public function __construct()
    {
    }

    public function compose(View $view)
    {
//        $menus = [];//TODO 动态菜单栏
        $headerNeed = true;
        $headerExcepts = [
            '/admin/login'
        ];
        if ($this->shouldPassThrough($headerExcepts))
        {
            $headerNeed = false;
        }
        $view->with('headerNeed', $headerNeed);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param array $excepts
     * @return bool
     */
    protected function shouldPassThrough($excepts)
    {
        foreach ($excepts as $except)
        {
            if ($except !== '/')
            {
                $except = trim($except, '/');
            }
            if (Request::is($except))
            {
                return true;
            }
        }
        return false;
    }
}