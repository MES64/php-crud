<?php
namespace App;

class Database
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = mysqli_connect("localhost", "mark", "Iwctopf24!", "php_crud");
  }

  public function getContacts()
  {
    $sql = "SELECT * FROM contacts";
    $result = mysqli_query($this->dbconn, $sql);
    $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $contacts;
  }
}