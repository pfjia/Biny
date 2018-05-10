<?php
/**
 * Created by PhpStorm.
 * User: pfjia
 * Date: 2018/5/9
 * Time: 9:55
 */


class indexAction extends baseAction
{
    public function action_index()
    {
        $view = $this->display('index/header');
        $view->title = "我的网站";
        return $view;
    }
}