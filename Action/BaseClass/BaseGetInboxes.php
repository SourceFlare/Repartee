<?php
namespace Repartee\Action\BaseClass;

class BaseGetInboxes
{
    # Set values through constructor
    public function __construct() {}

    # Set values through dynamic call
    public function __call($a, $b='')
    {
        $this->$a = $b;
        return $this;
    }
}
