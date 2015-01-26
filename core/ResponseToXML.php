<?php
namespace Repartee\core;

class ResponseToXML
{
    final public static function convert ($response)
    {
        foreach ($response as $k => $v) {
            if (is_object($v))
                $v = (array) $v;
            if (is_array($v)) {
                foreach ($v as $k1 => $v1) {
                    if (is_object($v1))
                        $v1 = (array) $v1;
                    if(is_int($k1)) {
                        $items .= "<sub_int_$k1>$v1</sub_int_$k1>";
                    } else {
                        $items .= "<sub_$k1>$v1</sub_$k1>";
                    }
                }
            } else {
                $items .= "<$k>$v</$k>";
            }
        }
        return "<Repartee>$items</Repartee>";
    }
}
