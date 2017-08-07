<?php
// 注册树模式
class Register
{
    protected static $objects;

    function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    static function get($name)
    {
        return self::$objects[$name];
    }

    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}