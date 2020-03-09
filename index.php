<?php
$title="Index";
 include 'includes/header.php'?>
<h1>Hello PHP--PHP Premier</h1>
<?php
//printing to html using echo
echo "Hello world";
echo'<br/>';
echo 'second life!';
echo '</br>';
//echo variable
   $name='Tooba Ahmed Alvi';
   $age=19;
   echo $name;
   echo '<h5> My Name is : '.$name.'</h5>';
   echo '<h6> My age is : '.$age.'</h6>';
   echo "<p>Copyrights &copy; 1999-". date("Y")."PHP Masterclass</p>";
   ?>
<button type="button" class="btn btn-warning">CLICK ME!</button> 
<button type="button" class="btn btn-success">INSTRUCTIONS</button>
<button type="button" class="btn btn-secondary">HOW TO USE</button>
<a href="https://www.heroku.com" target="_blank" class="btn btn-secondary">Heroku.com</a>   
</body>
</html>



