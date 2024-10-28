<?php
namespace App;

class Database
{
  private $dbconn;

  public function __construct()
  {
    include "conn_vars.php";
    
    $this->dbconn = mysqli_connect($my_host, $my_username, $my_password, $my_dbname);
  }

  public function getContacts()
  {
    $sql = "SELECT * FROM contacts";
    $result = mysqli_query($this->dbconn, $sql);
    $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $contacts;
  }

  public function addContact($name_first, $name_last, $email, $birth_date)
  {
    $sql = "INSERT INTO contacts (name_first, name_last, email, birth_date) VALUES ('$name_first', '$name_last', '$email', '$birth_date');";
    mysqli_query($this->dbconn, $sql);
  }
}