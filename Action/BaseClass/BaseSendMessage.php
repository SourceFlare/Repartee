<?php
namespace Repartee\Action\BaseClass;

class BaseSendMessage
{
    # Set values through constructor
    public function __construct($data=[])
    {
        @$this->Recipients = $data['Recipients'];
        @$this->Message = $data['Message'];
    }

    # Set values through dynamic call
    public function __call($action, $params='')
    {
        $this->$action = $params;
        return $this;
    }

    # Set Recipients through Chaining
    final public function setRecipients ($recipients)
    {
        $this->Recipients = $recipients;
        return $this;
    }

    # Set Message through Chaining
    final public function setMessage ($message)
    {
        $this->Message = $message;
        return $this;
    }

    # Format Recipients Into Comma Delimited
    final public function formatRecipients ()
    {
        return implode(',', $this->Recipients);
    }
}
