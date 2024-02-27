<?php
session_start();

$_SESSION['myName']="Bassel";
echo "Global session variable was set";
// session_unset();