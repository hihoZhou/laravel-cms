<?php
/**
 * EntrustPermission.php.
 *
 *
 * @author    hihozhou <hihozhou.github.io>
 * @email     hihozhou@gmail.com
 * Time: 16-9-29 上午11:11
 */

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
class EntrustPermission extends \Zizaco\Entrust\Middleware\EntrustPermission
{
    public function __construct(Guard $auth)
    {
        parent::__construct($auth);
    }
}