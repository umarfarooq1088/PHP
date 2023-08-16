<?php 
   class calculator{
    public function add($num1, $num2) {
      return $num1 + $num2;
  }

  public function subtract($num1, $num2) {
      return $num1 - $num2;
  }

  public function multiply($num1, $num2) {
      return $num1 * $num2;
  }

  public function divide($num1, $num2) {
      if ($num2 == 0) {
          return "Cannot divide by zero";
      }
      return $num1 / $num2;
  }
}
if(isset($_GET["operation"])&& $_GET["operation"] != "" && isset($_GET["num1"])&& $_GET["num1"] != "" && is_numeric($_GET["num1"]) && isset($_GET["num2"])&& $_GET["num2"] != "" && is_numeric($_GET["num2"])){
$calculator = new Calculator();

if ($_GET["operation"] === "add"){
  $_GET["result"] = $calculator->add($_GET["num1"],$_GET["num2"]);
}
elseif ($_GET["operation"] === "sub"){
  $_GET["result"] = $calculator->subtract($_GET["num1"],$_GET["num2"]);
}
elseif ($_GET["operation"] === "mul"){
  $_GET["result"] = $calculator->multiply($_GET["num1"],$_GET["num2"]);
}
elseif ($_GET["operation"] === "div"){
  $_GET["result"] = $calculator->divide($_GET["num1"],$_GET["num2"]);
}

}
   
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <title>calculator</title>
</head>
<body>
  <h1>simple calculator</h1>
<form  method ="get">
  <!-- Number 1 -->
  <div>
    <label for="num1">Number 1</label>
    <input type="number" name="num1" id="num1">
  </div>

    <!-- Number 2 -->
    <div>
    <label for="num2">Number 2</label>
    <input type="number" name="num2" id="num2">
  </div>
   <!-- operation -->
   <div>
    <input type="submit" value="add" name= "operation">
    <input type="submit" value="sub" name= "operation">
    <input type="submit" value="mul" name= "operation">
    <input type="submit" value="div" name= "operation">
   </div>
    <!-- Result -->
    <div>
    <label for="num1">Result</label>
    <input type="number"  id="result" disabled value="<?php 
     if(isset($_GET["result"])){

      echo $_GET["result"];
      unset($_GET["result"]);
     }
     ?>">
  </div>



</body>
</html>