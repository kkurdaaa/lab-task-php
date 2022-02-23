<html>
<style>
        body {
  background-color: black;
  color: white;
}
</style>
<body>
<?php
$total=0;
$discount = (mt_rand(1,5));
 echo $_POST["fname"]; 
 echo '<br>';
 echo $_POST["lname"]; 
 echo '<br>';
 echo $_POST["phone"]; 
 echo '<br>';
 echo $_POST["meal"]; 
 echo '<br>';
 echo $_POST["Numberm"]; 
 echo '<br>';
 echo $_POST["drink"]; 
 echo '<br>';
 echo $_POST["Numberd"]; 
 echo '<br>';
 echo $_POST["location"]; 
 echo '<br>';
 echo 'you recived '.$discount.'$ discount';
 echo '<br>';
 $total=($meal*$Numberm)+($drink*$Numberd);
 if(location=='near the restaurant')
 {
    $total=$total+1;
 }
 elseif(location=='far from restaurant')
 {
    $total=$total+3;
 }
 echo 'your total is '.$total;
 ?>
</body>
</html>