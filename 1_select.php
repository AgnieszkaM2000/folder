<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h3>Użytkownicy z tabeli users</h3>
    <?php
    require_once('./scripts/connect.php');
    $sql = "SELECT * from 'users'";
    $result = $conn->query($sql);
    while ($user = $result->fetch_assoc()) {
      echo $user['name'];
    } ?>
  </body>
</html>
