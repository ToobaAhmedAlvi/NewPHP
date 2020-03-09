<?php 
 $title="Switch";
 include 'includes/header.php'?>
<h1>SWITCH STATEMENTS</h1>
<?php
$grade='c';
switch($grade){
    case 'a':
        echo'<h3 style="color:green">YOU ARE A SUPERSTAR</h3>';
        break;
    case 'b':
        echo'<h3 style="color:blue">YOU DID WELL</h3>';
        break;

    default:
        echo'<h3 style="color:red">YOU ARE FAILED....</h3>';
         break;
    }
?>
<?php require 'includes/footer.php'?>
