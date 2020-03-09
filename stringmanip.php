<?php
$title="String Manipulation";
 include 'includes/header.php'?>
<h1>PHP String Manipulation</h1>
<?php
$name="tooba ahmed alvi";
  //CONCATINATION OF STRINGS
  $phrase1="Student who came late";
  $phrase2=" In class,Stand With Rock";
  //echo $phrase1;
  //echo $phrase2;
 echo $phrase1  ." named Tooba ".  $phrase2. '</br>';
  echo'<hr/>';
 //STRING TRANSFORMATION
 echo'Uppercase first letter:'.ucfirst($name).'</br>';
 echo'Uppercase first letter:'.ucwords($name).'</br>';
 echo'Uppercase :'.strtoupper($name).'</br>';
 echo'Lowercase:'.strtolower("THIS WAS UPPERCASE").'</br>';
 echo'<hr/>';
 echo'Repeat String:'.str_repeat('a',5).'<br/>'; 
 echo'Repeat String:--NESTED FUNCTION'.strtoupper(str_repeat('a',5)).'<br/>'; 
 echo "GET S SUBSTRING:".substr($name,5,8).'</br>';

 echo'Get position of string'.strpos($name,'a').'<br/>';
 //returns null

 echo'Find character "b"'.strchr($name,'b').'<br/>'; 
 echo'Find character "s"'.strchr($name,'s').'<br/>'; 
 echo'Find length of string :'.strlen($name).'<br/>';
 echo' Without Trim spaces :'."A"."B C D"."E".'<br/>'; 
 echo'Trim spaces to both sides :'."A".trim(" B C D ")."E".'<br/>'; 
 echo'Trim spaces to the left:'."A".ltrim(" B C D ")."E".'<br/>'; 
 echo'Trim spaces to  the right:'."A".rtrim(" B C D ")."E".'<br/>';  
 echo'Replace string with another:'.str_replace("Stand","Sit",$phrase2).'<br/>';
 ?>
 <?php require 'includes/footer.php'?>