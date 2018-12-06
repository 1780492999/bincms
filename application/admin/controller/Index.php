<?php
namespace app\index\controller;

use app\common\controller\Backend;

class Index extends Backend
{
    public function index()
    {
        return $this->fetch();
    }
}
