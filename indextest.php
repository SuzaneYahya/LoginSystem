<?php
session_start();
if(isset($_SESSION['myName'])){
echo "My Name is: ".$_SESSION['myName'] ;
}
else{
    echo "No Global session variables";
}
?>