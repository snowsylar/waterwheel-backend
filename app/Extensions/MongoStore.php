<?php
/**
 * Project Orion
 *
 * @author    Sylar_zeng <Sylar_zeng@patazon.new>
 * @copyright Copyright (c) Shenzhen Qianhai Patuoxun Network & Technology Inc.
 * @version   $Id$
 */
namespace App\Extensions;

use Illuminate\Contracts\Cache\Store;

class MongoStore implements Store
{
    public function get($key)
    {
        // TODO: Implement get() method.
    }

    public function put($key, $value, $seconds)
    {
        // TODO: Implement put() method.
    }

    public function putMany(array $values, $seconds)
    {
        // TODO: Implement putMany() method.
    }

    public function forget($key)
    {
        // TODO: Implement forget() method.
    }

    public function getPrefix()
    {
        // TODO: Implement getPrefix() method.
    }

    public function increment($key, $value = 1)
    {
        // TODO: Implement increment() method.
    }

    public function decrement($key, $value = 1)
    {
        // TODO: Implement decrement() method.
    }

    public function flush()
    {
        // TODO: Implement flush() method.
    }

    public function forever($key, $value)
    {
        // TODO: Implement forever() method.
    }

    public function many(array $keys)
    {
        // TODO: Implement many() method.
    }
}
