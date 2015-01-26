<?php
namespace Repartee\core;

# Repartee Imports
use Repartee\core\BaseOperation;
use Repartee\core\Commit;
use Repartee\config\ReparteeConfig;

class NewMessage extends BaseOperation
{
    public $Recipients = [];
    public $Message = "";

    # Send a Message
    final public function send ()
    {
        # Commit Message to cURL
        return (new Commit)->send(
            ReparteeConfig::getSetting('send_sms'),     # Endpoint path
            [
                'numbers' => $this->formatRecipients(), # Format Numbers into Comma-Delimited
                'message' => urlencode($this->Message)  # URL Encode Message
            ]
        );
    }
}
