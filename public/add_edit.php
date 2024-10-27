<?php
$title = "Simple PHP CRUD -- Add / Edit Contacts";
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
  <form action="">
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