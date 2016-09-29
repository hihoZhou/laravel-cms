<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function(Blueprint $table){
            $table->increments('id');
            $table->Integer('pid')->comment('上一级id,0为最顶级');
            $table->string('uri_name', 255)->default(NULL)->comment('请求地址别名');//通过URL::route('uri_name')获取真实url
            $table->string('desc', 64)->comment('url的描述');
            $table->string('permission_name', 64)->comment('权限的name');
            $table->char('type',8)->comment('菜单栏类型:module模块,view页面,action接口链接或处理页面');
            $table->string('icon')->default('fa-book')->comment('菜单栏图片');
            $table->tinyInteger('sort')->default(1)->comment('菜单栏排序');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menus');
    }
}
