<?php
namespace Repartee\core;

# Repartee Core Imports
use Repartee\config\ReparteeConfig;
use Repartee\core\cURL\ReparteeCURL;

class Commit
{
    final public function send ($endpoint, $data=array())
    {
        # Set Login Details
        $data['username'] = ReparteeConfig::getSetting('username');
        $data['hash'] = ReparteeConfig::getSetting('hash');
        $data['apikey'] = ReparteeConfig::getSetting('apikey');

        # Set Sender's Name
        $data['sender'] = ReparteeConfig::getSetting('sender');

        # Set Test Mode Flag to Config Setting (Default=0)
        $data['test'] = ReparteeConfig::getSetting('test_mode');

        # Format
        $data['format'] = ReparteeConfig::getSetting('response_format');

        # Send Data to API over cURL
        $MyConn = new ReparteeCURL;
        $response = $MyConn->open ($endpoint, $data);

        # Return Response Data
        return $response;
    }
}
