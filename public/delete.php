<?php
require_once "../app/Database.php";

use App\Database;

$database = new Database();

$id = $_GET['id'];

$database->deleteContact($id);

header("Location: index.php");