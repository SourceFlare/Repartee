<?php namespace Repartee\Action;

use Repartee\Action\BaseClass\BaseGetMessages;
use Repartee\config\ReparteeConfig;
use Repartee\core\Commit;

class GetMessages extends BaseGetMessages
{
    public $inboxId = '';

    # Send a Message
    final public function send ()
    {
        # Commit Message to cURL
        return (new Commit)->send(
            ReparteeConfig::getSetting('messages'),     # Endpoint path
            [
                'inbox_id' => $this->inboxId                # Format Numbers into Comma-Delimited
            ]
        );
    }
}
