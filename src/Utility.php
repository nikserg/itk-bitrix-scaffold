<?php

namespace itcomgk;

/**
 * @package itcomgk
 */
class Utility
{
    /**
     * Копирует заполненные значения из одного массива в другой согласно карте ключей
     *
     * @param array $from
     * @param array $to
     * @param array $keyFromToMap
     * @return array
     * @see empty
     */
    public static function transferFilledKeys(array $from, array $to, array $keyFromToMap)
    {
        foreach ($keyFromToMap as $keyFrom => $keyTo) {
            if (!empty($from[$keyFrom])) {
                $to[$keyTo] = $from[$keyFrom];
            }
        }
        return $to;
    }

    /**
     * Копирует заполненные значения из одного массива в другой
     *
     * @param array $from
     * @param array $to
     * @return array
     * @see empty
     */
    public static function transferFilled(array $from, array $to)
    {
        foreach ($from as $key => $value) {
            if (!empty($value)) {
                $to[$key] = $value;
            }
        }
        return $to;
    }

    /**
     * Собирает непустые ключи из массивов, с приоритетом для поздних аргументов
     *
     * @param array[] $from
     * @return array
     * @see array_merge
     * @see empty
     */
    public static function gatherFilled(...$from)
    {
        $to = [];
        $from = array_merge(...$from);
        foreach ($from as $key => $value) {
            if (!empty($value)) {
                $to[$key] = $value;
            }
        }
        return $to;
    }

    /**
     * Собирает непустые указанные ключи из массивов, с приоритетом для поздних аргументов
     *
     * @param         $keys
     * @param array[] $from
     * @return array
     * @see array_merge
     * @see empty
     */
    public static function gatherFilledKeys($keys, ...$from)
    {
        $to = [];
        $from = array_merge(...$from);
        foreach ($keys as $key) {
            if (!empty($from[$key])) {
                $to[$key] = $from[$key];
            }
        }
        return $to;
    }

    /**
     * Заполнен-ли хоть один ключ массива (не рекурсивно)
     *
     * @param array $list
     * @return bool
     * @see empty
     */
    public static function anyFilled(array $list)
    {
        foreach ($list as $value) {
            if (!empty($value)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Аналог join, игнорирующий пустые элементы
     *
     * @param array  $list
     * @param string $glue
     * @return string
     * @see join
     * @see empty
     */
    public static function joinFilled(array $list, string $glue)
    {
        return join($glue, self::transferFilled($list, []));
    }

    /**
     * Приводит пустое значение к null
     *
     * @param $value
     * @return null
     * @see empty
     * @see null
     */
    public static function nullify($value)
    {
        return empty($value) ? null : $value;
    }

    /**
     * Разбивает строку рекурсивно на массив по всем указанным разделителям
     *
     * @param array       $delimiters
     * @param string|null $source
     * @return array
     * @see explode
     */
    public static function recursiveExplode(array $delimiters, ?string $source)
    {
        if (empty($source)) {
            return [];
        }
        if (empty($delimiters)) {
            return [$source];
        }
        $chunks = [];
        foreach (explode(array_pop($delimiters), $source) as $item) {
            $chunks[] = self::recursiveExplode($delimiters, $item);
        }
        return array_merge(...$chunks);
    }

    /**
     * По сути удаляет колонку из многомерного массива
     *
     * @param array  $source
     * @param string $column
     * @return array
     * @see unset
     */
    public static function unsetColumn(array &$source, string $column)
    {
        foreach ($source as $key => $value) {
            unset($source[$key][$column]);
        }
        return $source;
    }

    /**
     * Фильтрует значения в массиве аналогично filter_var
     *
     * @param      $array
     * @param int  $filter
     * @param null $options
     * @return array
     * @see array_filter
     * @see filter_var
     */
    public static function filterArrayValues($array, $filter = FILTER_DEFAULT, $options = null)
    {
        return array_filter($array, function ($element) use ($filter, $options)
        {
            return false !== filter_var($element, $filter | FILTER_VALIDATE_EMAIL, $options);
        });
    }

    /**
     * Сериализует данные в json и считает кусочек md5 хеша указанного размера
     *
     * @param     $data
     * @param int $length
     * @return false|string
     * @see json_encode
     * @see md5
     */
    public static function dataHash($data, $length = 8)
    {
        return substr(md5(json_encode($data)), 0, $length);
    }
}