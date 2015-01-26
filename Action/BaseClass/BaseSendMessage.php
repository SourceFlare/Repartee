<?php
namespace Repartee\Action\BaseClass;

class BaseSendMessage
{
    # Set values through constructor
    public function __construct($d=[])
    {
        @$this->Recipients = $d['Recipients'];
        @$this->Message = $d['Message'];
    }

    # Set values through dynamic call
    public function __call($a, $b='')
    {
        $this->$a = $b;
        return $this;
    }

    # Set Recipients through Chaining
    final public function setRecipients ($r)
    {
        $this->Recipients = $r;
        return $this;
    }

    # Set Message through Chaining
    final public function setMessage ($m)
    {
        $this->Message = $m;
        return $this;
    }

    # Format Recipients Into Comma Delimited
    final public function formatRecipients ()
    {
        return implode(',', $this->Recipients);
    }
}
