<?php
 $name = "Venkata Harsha";
 $food = "Chicken Biryani";
 $email = "venkataharshapedada9@gmail.com";

 echo"Hi {$name} <br>";
 echo"Your favorite food is {$food}  <br>";
 echo"Your email id is {$email} <br>";
 echo"You Don't like php <br>";
 echo"It's not that really great";

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="index.php" method="post">
  <label>username:</label>
  <input type="text" name="username"><br>
  <label>password:</label>
  <input type="password" name="password"><br>
  <input type="submit" value="Log in"> 
 </form>
</body>
</html>

<?php
echo"{$_POST["username"]} <br>";
echo"{$_POST["password"]} <br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="index.php" method="get">
  <label> Enter the counter value </label>
  <input type="text" name="counter">
  <input type="submit" value="start">
 </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="index.php" method="get">
  <label>Country </label>
  <input type="text" name="capital">
  <input type="submit" value="get capital">
 </form>
</body>
</html>

<?php 
$counter = $_GET["counter"];
for ($i=1;$i<$counter;$i++){
 echo $i . "<br>";
}

$foods = array("apple", "banana", "orange", "grapes");

// echo $foods[0] . "<br>";
// array_push($foods, "pineapple", "coconut");
array_pop($foods);
foreach($foods as $food){
 echo $food . "<br>";
}

$capitals = array("USA" => "Washington D.C",
                   "Japan" => "tokyo",
                    "South Korea" => "Seoul",
                   "India" => "New Delhi");
foreach($capitals as $key=>$values){
 echo $key . "= " . $values . "<br>";
}

$capital = $capitals[$_GET["capital"]] . "<br>";
echo "The capital is {$capital} ";

$username = null;

if (isset($username))
{
 echo"initialized";
}
else{
 echo"not initialized";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="index.php" method="post">
  <label>User name</label> <br>
  <input type="text" name="username"> <br>
  <label>Password</label> <br>
  <input type="password" name="password"> <br>
  <input type="submit" name="button" value="LogIn"> <br>
 </form>
</body>
</html>

<?php
if (isset($_POST["button"])){
 if (empty($_POST["username"])){
 echo "User name is missing <br>";
}
elseif(empty($_POST["password"])){
 echo "Password is missing <br>";
}
else{
 echo "Submitted this {$_POST["username"]} username and this {$_POST["password"]} password <br> " ;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="index.php" method="post">
  <input type="radio" name="credit_card" value="visa">VISA<br>
  <input type="radio" name="credit_card" value="amex">AMEX<br>
  <input type="radio" name="credit_card" value="Mastercard">MASTERCARD<br>
  <input type="submit" value="confirm" name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
 if (isset($_POST["credit_card"])){
 echo "You have selected {$_POST["credit_card"]} <br>";
 }
 else{
  echo "Please select your credit card type";
 }
}


?>