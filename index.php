<?php
session_start();
echo "Hello LINE BOT";
//On page 2
$var_value = $_SESSION['varname'];
echo $var_value;
