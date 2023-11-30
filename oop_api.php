<?php

require __DIR__. "/vendor/autoload.php";

$client = new GuzzleHttp\Client();

$response = $client->request("GET", "https://api.github.com/user/repos", [
     "headers" => [
          "Authorization: token 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",
          "User-Agent: fuad4web"
     ]
]);

echo $response->getStatusCode(), "\n\n";

echo $response->getHeader("Content-Type"[0]), "\n\n";

echo substr($response->getBody(), 0, 200), "...\n\n";

?>
