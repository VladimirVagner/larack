<?php

namespace Corals\Modules\Utility\Facades\ListOfValue;

use Illuminate\Support\Facades\Facade;

/**
 * Class ListOfValues
 * @package Corals\Modules\Utility\Facades\ListOfValue
 * @method static getParents($module = null, $objects = false, $status = null)
 * @method static get($parentCode, $status = 'active', $objects = false)
 * @method static getLOVByCode($code, $parentCode = null, $attribute = 'label', $default = null, $object = false)
 * @method static getColoredLOVByCode($code, $parentCode = null, $attribute = 'label', $default = null)
 * @method static insertListOfValuesChildren($parent, $options)
 */
class ListOfValues extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return \Corals\Modules\Utility\Classes\ListOfValue\ListOfValueManager::class;
    }
}
