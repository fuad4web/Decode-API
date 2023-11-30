<?php

     if(!empty($_GET['name'])) {
          $age_response = file_get_contents("https://api.agify.io?name={$_GET['name']}");
          $age_data = json_decode($age_response, true);
          $api_age = $age_data["age"];
     }

     if(!empty($_GET['id'])) {
          $single_school = file_get_contents("https://fuskydon.com/nig-institutions-api/v1/single_institution?id={$_GET['id']}");
          $single_data = json_decode($single_school, true);
          $single_school_api = $single_data["data"]["institution"];
     }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Predict Age</title>
</head>
<body>

     <?php if(isset($api_age)): ?>
          Age:&nbsp; <?= $api_age ?>
     <?php endif; ?>
     <form action="" method="GET">
          <label for="name">Name:&nbsp;</label>
          <input type="text" name="name" id="name">
          &nbsp;&nbsp;
          <button type="submit">Guess Age</button>
     </form>

     <br><br><br>

     <?php if(isset($single_school_api)): ?>
          School:&nbsp; <?= $single_school_api ?>
     <?php endif; ?>
     <form action="" method="GET">
          <label for="name">Higher Institution Name:&nbsp;</label>
          <input type="text" name="id" id="name">
          &nbsp;&nbsp;
          <button type="submit">Guess Institution</button>
     </form>

</body>
</html>
