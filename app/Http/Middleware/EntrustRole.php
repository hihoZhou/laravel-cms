<?php
/**
 * EntrustRole.php.
 *
 *
 * @author    hihozhou <hihozhou.github.io>
 * @email     hihozhou@gmail.com
 * Time: 16-9-29 上午11:07
 */

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
class EntrustRole extends \Zizaco\Entrust\Middleware\EntrustRole
{
    public function __construct(Guard $auth)
    {
        parent::__construct($auth);
    }
}