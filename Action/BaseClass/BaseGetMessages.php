<?php
namespace Repartee\Action\BaseClass;

class BaseGetMessages
{
    # Set values through constructor
    public function __construct($inboxId='')
    {
        $this->inboxId = $inboxId;
    }

    # Set values through dynamic call
    public function __call($action, $params='')
    {
        $this->$action = $params;
        return $this;
    }

    # Set Recipients through Chaining
    final public function setRecipients ($inboxId='')
    {
        $this->inboxId = $inboxId;
        return $this;
    }
}
