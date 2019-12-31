<?php

/**
 * @see       https://github.com/laminas/laminas-di for the canonical source repository
 * @copyright https://github.com/laminas/laminas-di/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-di/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Di\TestAsset;

class StaticFactory
{
    public static function factory(Struct $struct, array $params = array())
    {
        $params = array_merge((array) $struct, $params);
        return new DummyParams($params);
    }
}
