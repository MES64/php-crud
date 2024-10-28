<?php
require_once "../app/Database.php";

use App\Database;

$database = new Database();

$title = "Simple PHP CRUD -- Add / Edit Contacts";

if ($_POST) {
  $id = $_POST['id'] ?? null;
  $name_first = $_POST['name_first'];
  $name_last = $_POST['name_last'];
  $email = $_POST['email'];
  $birth_date = $_POST['birth_date'];

  if ($id) {
    $database->updateContact($id, $name_first, $name_last, $email, $birth_date);
  } else {
    $database->addContact($name_first, $name_last, $email, $birth_date);
  }

  header("Location: index.php");
}

$id = $_GET['id'] ?? null;
if ($id) {
  $contact = $database->getContact($id);
} else {
  $contact = [];
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
      <input type="text" id="name_first" name="name_first" placeholder="First Name"
      value="<?php echo $contact['name_first'] ?? null; ?>">
    </div>
    <div>
      <label for="name_last">Last Name</label>
      <input type="text" id="name_last" name="name_last" placeholder="Last Name"
      value="<?php echo $contact['name_last'] ?? null; ?>">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Email"
      value="<?php echo $contact['email'] ?? null; ?>">
    </div>
    <div>
      <label for="birth_date">Birth Date</label>
      <input type="date" id="birth_date" name="birth_date"
      value="<?php echo $contact['birth_date'] ?? null; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div>
      <button type="submit">Save</button>
      <a href="index.php">Cancel</a>
    </div>
  </form>
</body>
</html>