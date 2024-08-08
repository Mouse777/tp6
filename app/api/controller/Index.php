<?php
namespace app\api\controller;

use app\api\ApiBaseController;

class Index extends ApiBaseController
{
    public function index()
    {
        return 'api';
    }

    public function hello($name = 'ThinkPHP6admin')
    {
        return 'hello,' . $name;
    }
}
