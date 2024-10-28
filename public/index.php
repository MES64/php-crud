<?php
require_once "../app/Database.php";

use App\Database;

$database = new Database();

$contacts = $database->getContacts();
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
      <?php foreach ($contacts as $contact): ?>
      <tr>
        <td><?php echo $contact['name_first']; ?></td>
        <td><?php echo $contact['name_last']; ?></td>
        <td><?php echo $contact['email']; ?></td>
        <td><?php echo $contact['birth_date']; ?></td>
        <td>
          <a href="add_edit.php?id=<?php echo $contact['id']; ?>">Edit</a>
          <a href="delete.php?id=<?php echo $contact['id']; ?>">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <a href="add_edit.php">Add Contact</a>
</body>
</html>