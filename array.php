<?php
$title="Array";
include 'includes\header.php'?>
    <h1><?php echo $title?></h1>
    <?php
    //a variable
    $num=3;
    //an array
    //Onlyone datatype
    $numbers=array(1,2,3,4,5,6,7,8,9,10);
    echo $numbers[5];
    echo"<p>$numbers[9]</p>";
    $size=count($numbers);
    echo"<p style='color:pink'>ARRAY numbers is size:$size</p>";
    //for loop for array
    for($count=0;$count<$size;$count++)
    {
        echo"$numbers[$count]";
    }


?>
<?php require 'includes\footer.php'?>