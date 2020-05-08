<?php

namespace itcomgk\bitrix24;

use GeneralCache;

/**
 * Интеграция специально для класса кеширования в контексте Zurmo CRM
 *
 * @see GeneralCache
 *
 * @package itcomgk\bitrix24
 */
class ZurmoBitrixStorage implements \bitrix\storage\Storage
{
    public function set(string $key, $value)
    {
        GeneralCache::cacheEntry($key, $value);
    }

    public function get(string $key)
    {
        return GeneralCache::getEntry($key, null);
    }
}