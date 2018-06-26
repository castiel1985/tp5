<?php
namespace app\index\controller;

class Index
{
    public function index()
            
    {
        return $this->test();
    }
    public function test()
    {
        return 'this is one test';
        //return $_FILES;
    }
}
