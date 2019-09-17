<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class TestController extends Controller
{
    protected $driver;

    public function __construct()
    {
        $this->driver = 'redis';
    }

    public function index()
    {
        $collection = collect(['John Doe', 'Jane Doe']);
        $collection->each(function ($item, $key) {
            echo 'key:' . $key . PHP_EOL;
        });
    }

    /**
     * 设置缓存值
     *
     * @param Request $request
     * @return string
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function setCache(Request $request)
    {
//        if (! Cache::store($this->driver)->has('name')) {
//            $name = $request->get('name') ?? 1111;
//            Cache::store($this->driver)->put('name', $name, 600);
//            Cache::store($this->driver)->increment('name', 1111);
//        }
        cache(['name' => '444'], 10);
        return '1111';
    }

    /**
     * 获取缓存值
     *
     * @return mixed
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function getCache()
    {
        return cache('name');
        return Cache::store($this->driver)->get('name');
    }
}
