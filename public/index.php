<?php
$title = "Simple PHP CRUD -- Contacts";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
</head>
<body>
  <h1><?php echo $title ?></h1>
  <table>
    <head>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Birth Date</th>
        <th>Actions</th>
      </tr>
    </head>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>test@test.com</td>
        <td>1999-01-01</td>
        <td>
          <a href="add_edit.php">Edit</a>
          <a href="#">Delete</a>
        </td>
      </tr>
    </tbody>
  </table>
  <a href="add_edit.php">Add Contact</a>
</body>
</html>