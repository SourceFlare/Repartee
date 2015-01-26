<?php
namespace Repartee\Action;

use Repartee\Action\BaseClass\BaseGetMessages;
use Repartee\config\ReparteeConfig;
use Repartee\core\Commit;

class getMessages extends BaseGetMessages
{
    public $Inbox_ID = '';

    # Send a Message
    final public function send ()
    {
        # Commit Message to cURL
        return (new Commit)->send(
            ReparteeConfig::getSetting('messages'),     # Endpoint path
            [
                'inbox_id' => $this->Inbox_ID                # Format Numbers into Comma-Delimited
            ]
        );
    }
}