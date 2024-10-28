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
    $sql = "SELECT * FROM contacts;";
    $result = mysqli_query($this->dbconn, $sql);
    $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $contacts;
  }

  public function getContact($id)
  {
    $sql = "SELECT * FROM contacts WHERE id = $id;";
    $result = mysqli_query($this->dbconn, $sql);
    $contact = mysqli_fetch_assoc($result);
    return $contact;
  }

  public function addContact($name_first, $name_last, $email, $birth_date)
  {
    $sql = "INSERT INTO contacts (name_first, name_last, email, birth_date) VALUES ('$name_first', '$name_last', '$email', '$birth_date');";
    mysqli_query($this->dbconn, $sql);
  }

  public function updateContact($id, $name_first, $name_last, $email, $birth_date) {
    $sql = "UPDATE contacts SET name_first = '$name_first', name_last = '$name_last', email = '$email', birth_date = '$birth_date' WHERE id = $id;";
    mysqli_query($this->dbconn, $sql);
  }

  public function deleteContact($id) {
    $sql = "DELETE FROM contacts WHERE id = $id;";
    mysqli_query($this->dbconn, $sql);
  }
}