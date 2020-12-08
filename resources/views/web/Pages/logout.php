<?php
require_once 'init.php';
unset($_SESSION['email']);
header('Location:index.php');