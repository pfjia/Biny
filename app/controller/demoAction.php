<?php
/**
 * 演示Action
 * @property demoDAO $demoDAO
 */
class demoAction extends baseAction
{
    // 权限配置
    protected function privilege()
    {
        return [
            //key:权限验证方法
            //value:actions需要权限验证的action
            'login_required' => [
                'actions' => '*', //绑定action
            ],
        ];
    }

    /**
     * demo首页
     */
    public function action_index()
    {
        $view = $this->display('demo/demo');
        $view->title = "caotaniangde gan si ni ";
        return $view;
    }
}