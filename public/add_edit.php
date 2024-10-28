<?php
require_once "../app/Database.php";

use App\Database;

$database = new Database();

$title = "Simple PHP CRUD -- Add / Edit Contacts";

if ($_POST) {
  $name_first = $_POST['name_first'];
  $name_last = $_POST['name_last'];
  $email = $_POST['email'];
  $birth_date = $_POST['birth_date'];

  $database->addContact($name_first, $name_last, $email, $birth_date);

  header("Location: index.php");
}
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
  <form method="POST">
    <div>
      <label for="name_first">First Name</label>
      <input type="text" id="name_first" name="name_first" placeholder="First Name">
    </div>
    <div>
      <label for="name_last">Last Name</label>
      <input type="text" id="name_last" name="name_last" placeholder="Last Name">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Email">
    </div>
    <div>
      <label for="birth_date">Birth Date</label>
      <input type="date" id="birth_date" name="birth_date">
    </div>
    <div>
      <button type="submit">Save</button>
      <a href="index.php">Cancel</a>
    </div>
  </form>
</body>
</html>