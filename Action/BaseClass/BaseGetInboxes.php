<?php
namespace Repartee\Action\BaseClass;

class BaseGetInboxes
{
    # Set values through constructor
    public function __construct() {}

    # Set values through dynamic call
    public function __call($action, $params='')
    {
        $this->$action = $params;
        return $this;
    }
}
