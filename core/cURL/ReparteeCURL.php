<?php
namespace Repartee\core\cURL;

# Repartee Core Imports
use Repartee\config\ReparteeConfig;

class ReparteeCURL
{
    final public function open ($endpoint, $data)
    {
        # Build URL
        $url = (string) ReparteeConfig::getSetting('base_url') . $endpoint;

        # Perform cURL Operation to API Endpoint
        $ch = curl_init($url);

        # Set Options
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        # Execute Navigation
        $response = curl_exec($ch);

        # Close Connection
        curl_close($ch);

        # Decode JSON to Array then return
        return $response;
    }
}
