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
        $http = curl_init($url);

        # Set Options
        curl_setopt($http, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($http, CURLOPT_POST, true);
        curl_setopt($http, CURLOPT_POSTFIELDS, $data);
        curl_setopt($http, CURLOPT_RETURNTRANSFER, true);

        # Execute Navigation
        $response = curl_exec($http);

        # Close Connection
        curl_close($http);

        # Decode JSON to Array then return
        return $response;
    }
}
