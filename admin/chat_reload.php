<?php
include "connection.php";
include "functions.php";
session_start();
check_logged_in();

chat($conn);

?>