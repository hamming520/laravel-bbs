<?php

namespace App\Observers;

use App\Models\Link;
use Cache;

class LinkObserver
{
    public function saving(Link $link)
    {
        // 这样写扩展性更高，只有空的时候才指定默认icon
        if (empty($link->icon)) {
            $link->icon = config('app.url') . '/images/default-avatar.jpeg';
        }
    }

    // 在保存时清空 cache_key 对应的缓存
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }

    public function deleted(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}
