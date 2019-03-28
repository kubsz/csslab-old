<?php

$option = str_replace(",", "", str_replace(" ", "-", strtolower($_POST['option'])));
include($_SERVER['DOCUMENT_ROOT']."/lessons/$option.php");

?>