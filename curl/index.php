<?php

     $ch = curl_init();

     // curl_setopt($ch, CURLOPT_URL, "https://nig-institutions-api.fuskydon.com/v1/list_institutions");
     // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

     curl_setopt_array($ch, [
          CURLOPT_URL => "https://fuskydon.com/nig-institutions-api/v1/list_institutions",
          // CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?q=Ibadan&appid=72596d3ff32f499ef075ade1e0c5d56f",
          CURLOPT_RETURNTRANSFER => true
     ]);

     $school_response = curl_exec($ch);
     // $school_response = json_decode(curl_exec($ch), true);

     $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

     $status_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

     $content_length = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

     curl_close($ch);

     echo $school_response, "\n";
     echo $status_code, "\n";
     echo $status_type, "\n";
     echo $content_length, "\n";

     // $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
     // echo $status_code;

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <!-- <p>I am currently living at <?php  // $school_response["coord"]["name"] ?></p> -->
</body>
</html>
