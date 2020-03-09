<?php 
$title="Function";
include 'includes\header.php'?>
    <h1>Functions</h1>
    <?php 
    /*defining A Function*/
    function writeMsg(){
        echo "you are a really a nice person<br/>";
    }
    //Calling a function
    writeMsg();
    writeMsg();
    writeMsg();
    writeMsg();
    echo"<hr/>";
    writeMsg();
    //function  with parameters
    function addfunction($num1,$num2){
        $sum=$num1+$num2;
        $num2=$num2+1;
        echo"The sum of $num1 and $num2 is:$sum<br/>";
    }
    //call by reference--USE AMPERSAND in parameter
    function changeNum(&$num){
        $num=$num + 10;
        echo"";
    }
    function returnProduct($num1,$num2){
        $prod=$num1*$num2;
        return $prod;


    }
    $num=37;
    addfunction($num,23);
    addfunction(2,4);
    addfunction("2","4");
    changeNum($num);
    echo"$num.<br/>";
$return_value=returnProduct(10,200);
echo"$return_value.<br/>";
    ?>
<?php require 'includes\footer.php'?>