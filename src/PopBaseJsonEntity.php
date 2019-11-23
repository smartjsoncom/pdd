<?php

namespace SmartJson\Pdd;

use \JsonSerializable;
use \ReflectionClass;
use SmartJson\Pdd\Common\JsonUtil;

/**
 * 序列化基础类
 */
class PopBaseJsonEntity implements JsonSerializable
{
    /**
     * @param $doc 属性字段的注解
     * @return Common\然后数组，$arr[0]是类型， $arr[1]是映射的名称
     */
    protected function parseDoc($doc)
    {
        return JsonUtil::parseDoc($doc);
    }

    public function jsonSerialize()
    {
        $data = [];
        $class = new ReflectionClass($this);
        $properties = $class->getProperties();
        foreach ($properties as $prop) {
            $doc = $this->parseDoc($prop->getDocComment());
            $prop->setAccessible(true);
            if ($doc != null && count($doc) == 2) {
                $value = $prop->getValue($this);
                if (is_object($value)) {
                    $value = json_decode(json_encode($value), true);
                }
                if (!is_null($value)) {
                    $data[$doc[1]] = $value;
                }
            }
        }
        return empty($data) ? null : $data;
    }
}