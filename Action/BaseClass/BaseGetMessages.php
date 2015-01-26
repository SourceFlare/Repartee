<?php
namespace Repartee\Action\BaseClass;

class BaseGetMessages
{
    # Set values through constructor
    public function __construct($inbox_id='')
    {
        $this->Inbox_ID = $inbox_id;
    }

    # Set values through dynamic call
    public function __call($a, $b='')
    {
        $this->$a = $b;
        return $this;
    }

    # Set Recipients through Chaining
    final public function setRecipients ($inbox_id='')
    {
        $this->Inbox_ID = $inbox_id;
        return $this;
    }
}
