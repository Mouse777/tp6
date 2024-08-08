<?php
namespace app\admin\controller;

use app\admin\AdminBaseController;

class Index extends AdminBaseController
{
    public function index()
    {
        return 'admin';
    }

    public function hello($name = 'ThinkPHP6admin')
    {
        return 'hello,' . $name;
    }
}
