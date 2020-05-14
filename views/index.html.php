<?php
//stampare tutti gli utenti
include '../controllers/UserController.php';

$userController = new UserController;
$users = $userController->index();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Utenti</h1>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $key => $user) { ?>
        <tr>
          <td><?php echo $user->name; ?></td>
          <td><?php echo $user->lastname; ?></td>
          <td><?php echo $user->email; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>