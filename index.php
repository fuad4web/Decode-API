<?php 

$user_response = file_get_contents("https://randomuser.me/api");
$user_data = json_decode($user_response, true);
$user_data_names = $user_data["results"][0]["name"];
// getting the status code
// $userStatusCode = curl_getinfo($user_data, CURLINFO_HTTP_CODE);

$school_response = file_get_contents("https://fuskydon.com/nig-institutions-api/v1/list_institutions");
// $response = file_get_contents("https://fuskydon.com/nig-institutions-api/v1/single_institution?id=99");
// echo $response;
$school_data = json_decode($school_response, true);
// var_dump($data);
// foreach($data["data"]["records"]["id"] as $datas):
     // echo '<p>"'.$datas.'"</p>';
// endforeach;

echo $school_data["data"]["records"][400]["institution"], "\n";
// $data["results"][0]["picture"]["medium"], "\n";
// echo '<img src="'.$data["results"][0]["picture"]["medium"].'" alt="">';
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Playing with API</title>
</head>
<body>
     <p>My name is <?= $user_data_names["title"] .' '. $user_data_names["first"] .' '. $user_data_names["last"] ?></p>
     <p>Am currently in <?= $school_data["data"]["records"][424]["institution"], "\n"; ?></p>
</body>
</html>
