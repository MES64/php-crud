<?php
namespace App;

include_once "conn_vars.php";

class Database
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = mysqli_connect($host, $username, $password, $dbname);
  }

  public function getContacts()
  {
    $sql = "SELECT * FROM contacts";
    $result = mysqli_query($this->dbconn, $sql);
    $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $contacts;
  }
}