<?php

// API that requires specific headers 

     $ch = curl_init();

     $headers = [
          "Authorization: token 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",
          "User-Agent: fuad4web"
     ];

     $payload = json_encode([
          "name" => "Decode API",
          "description" => "A practice of udemy course api i brought. The tutorial is very helpful though."
     ]);

     curl_setopt_array($ch, [
          CURLOPT_URL => "https://api.github.com/user/repos",
          // CURLOPT_URL => "https://api.github.com/user/starred/fuad4web/medical",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_HTTPHEADER => $headers,
          // CURLOPT_USERAGENT => "fuad4web",
          CURLOPT_CUSTOMREQUEST => "POST",
          // CURLOPT_POST => true,  to calso set it to POST and nothing else 
          CURLOPT_POSTFIELDS => $payload
     ]);

     $photo_response = curl_exec($ch);

     $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

     curl_close($ch);

     echo $photo_response, "\n";
     echo $status_code, "\n";

?>
