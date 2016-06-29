<?php
namespace Repartee\Action;

use Repartee\Action\BaseClass\BaseGetInboxes;
use Repartee\config\ReparteeConfig;
use Repartee\core\Commit;

class GetInboxes extends BaseGetInboxes
{
    # Send a Message
    final public function send ()
    {
        # Commit Message to cURL
        return (new Commit)->send(
            ReparteeConfig::getSetting('inboxes')      # Endpoint path
        );
    }
}
