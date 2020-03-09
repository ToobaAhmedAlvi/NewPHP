<?php 
$title="If";
include 'includes/header.php'?>

<h2 style="color:red">if statement</h2>
<?php
//An if statement that will make a decision
echo '<h2>IF statement</h2>';
$grade=50;
if($grade >=50){
    echo '<h3 style ="color:green">you have passed</h3>';
}
else{
    echo'<h3 style ="color:red"> you have failed</h3>';
}
$grade='A';
//If -else
if($grade=='A')
{echo'<h2>YOU ARE A SUPERSTAR</h3>';
    '</br>';
    echo'ggood';}
    else{
        echo '<h2>YOU DID WELL</h2>';
    }
?>
<?php require 'includes\footer.php'?>