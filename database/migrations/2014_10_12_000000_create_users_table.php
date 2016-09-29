<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30)->unique()->nullable()->default(NULL)->comment('用户登录唯一用户名');
            $table->string('phone',11)->unique()->default(NULL)->comment('手机号码');
            $table->string('email')->unique()->nullable()->default(NULL)->comment('绑定的邮箱');;
            $table->string('password')->comment('密码');
            $table->string('nickname',32)->comment('昵称');
            $table->text('remark')->comment('备注');
            $table->enum('sex', ['0','1'])->comment('性别,0是女,1是男');
            $table->string('city',30)->comment('城市');
            $table->string('province',30)->comment('省');
            $table->string('country',30)->comment('国家');
            $table->string('avatar',80)->comment('头像');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
