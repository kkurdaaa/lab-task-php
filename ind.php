<html>
    <style>
        body {
  background-color: pink;
  color: black;
  align: center;
}
    </style>
<body>
<h1>welcome to our restaurant order your meal</h1>
<form action="hnd.php" method="post">
First name: <input type="text" name="fname" placeholder="enter your First name">
<br><br>
last name: <input type="text" name="lname" placeholder="enter your last name">
<br><br>
Phone Number: <input type="number" name="phone" placeholder="enter your phone number">
<br><br>
Choose Meal:
<select name="meal" id="meal">
<option value="3">Burger</option>
    <option value="8">Pizza</option>
    <option value="2">Sandwich</option>
    <option value="1">Shelm</option>
    <option value="3">Paqla</option>
    
</select>
<br><br>
Number of meals: <input type="number" name="Numberm" placeholder="enter number of meals">
<br><br>
<select name="drink" id="drink">
<option value="5">Cola</option>
    <option value="4">Pepsi</option>
    <option value="3">Fanta</option>
    <option value="2">7UP</option>
    <option value="1">Mountain dew</option>
</select>
<br><br>
Number of drinks: <input type="number" name="Numberd" placeholder="enter number of drinks">
<br><br>
Location:
<br>
near the restaurant<input type="radio" name="location" id="location" value="near the restaurant">
far from restaurant<input type="radio" name="location" id="location" value="far from restaurant">

<br><br>
<input type="submit" value="Order!">
</form>
</body>
</html>
