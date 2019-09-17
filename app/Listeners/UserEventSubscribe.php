<?php
/**
 * Project Orion
 *
 * @author    Sylar_zeng <Sylar_zeng@patazon.new>
 * @copyright Copyright (c) Shenzhen Qianhai Patuoxun Network & Technology Inc.
 * @version   $Id$
 */
namespace App\Listeners;

class UserEventSubscribe
{
    /**
     * 处理用户登录事件
     *
     * @param $event
     * @return void
     */
    public function onUserLogin($event) {}

    /**
     * 处理用户退出登录事件
     *
     * @param $event
     * @return void
     */
    public function onUserLogout($event) {}

    /**
     * 为订阅者注册监听器
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\UserEventSubscribe@onUserLogin'
        );

        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\UserEventSubscribe@onUserLogout'
        );
    }
}