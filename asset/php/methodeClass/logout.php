<?php

require_once "../class/classDb.php";

$id_user = $_GET['id_user'];

$user = new Db();

$user->logout();

header("Location: /index.php");
exit;
