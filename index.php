<?php
 $name = "Harsha";
 $food = "Biryani";
 $email = "venkataharshapedada9@gmail.com";

 echo"Hi {$name} <br>";
 echo"Your favourite food is {$food}  <br>";
 echo"Your email id is {$email} <br>";
 echo"You like php <br>";
 echo"It's really great";

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