<?php
/**
 * Menu.php.
 *
 *
 * @author    hihozhou <hihozhou.github.io>
 * @email     hihozhou@gmail.com
 * Time: 16-8-17 下午2:40
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function parent()
    {

        return $this->belongsTo('App\Models\Menu', 'pid', 'id');
    }

    public function childs()
    {

        return $this->hasMany('App\Models\Menu', 'pid', 'id');
    }
}