<?php
$title="Date & Time Manipulation"; include 'includes\header.php'?>
<h1>Date & Time Manipulation</h1>
<?php
  $datenow = getdate();
  echo"Today's date is :".'</br>';
  echo $datenow['mday'].'</br>';
  echo $datenow['mon'].'</br>';
  echo $datenow['year'].'</br>';
echo "Today's Date:".$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'].'</br>';
echo time();
print date("m/d/y G.i:s<br/>",time()).'<br/>';
print"today is:";
print date("j of F Y,\a\\t g.i a ",time());
?>
    <?php require 'includes\footer.php'?>
