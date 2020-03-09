<?php
$title="While Do-While";
include 'includes\header.php'?>
    <h1>While Loop</h1>
    <?php 

    $grade=0;
     while($grade <10){
         echo'<p style="color:orange">I am less than 10</p>';
         $grade++;
     }
      echo"EXIT LOOP";
    ?>
    <h1>Do While Loop</h1>
    <?php
    //POST CONDITION LOOP
    $grade=0;
    do{
        echo'<p style="color:Brown">i am do while loop';
        $grade++;    
    }while($grade<5)
    ?>
<?php require 'includes\footer.php'?>