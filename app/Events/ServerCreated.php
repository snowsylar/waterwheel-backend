<?php
/**
 * Project Orion
 *
 * @author    Sylar_zeng <Sylar_zeng@patazon.new>
 * @copyright Copyright (c) Shenzhen Qianhai Patuoxun Network & Technology Inc.
 * @version   $Id$
 */
namespace App\Events;

use App\User;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class ServerCreated implements ShouldBroadcast
{
    use SerializesModels;

    public $user;

    public $value;

    /**
     * 创建一个新的事件实例
     *
     * ServerCreated constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->value = 100;
    }

    /**
     * 获取事件广播的频道
     *
     * @return \Illuminate\Broadcasting\Channel|\Illuminate\Broadcasting\Channel[]|void
     */
    public function broadcastOn()
    {
        return new PrivateChannel('use.' . $this->user->id);
    }

    /**
     * 事件的广播名称
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'server.created';
    }

    /**
     * 指定广播数据（粒度）
     *
     * @return array
     */
    public function broadcastWith()
    {
        return ['id' => $this->user->id];
    }

    public function broadcastWhen()
    {
        return $this->value > 100;
    }
}