<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data de nascimento</title>

     <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background: #f0f2f5;
  color: #333;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}


h1 {
  margin-bottom: 20px;
  color: #2c3e50;
  text-align: center;
}


form {
  background: white;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
  min-width: 300px;
  display: flex;
  flex-direction: column;
  gap: 15px;
}


label {
  font-weight: bold;
  margin-bottom: 5px;
}


select,
input[type="text"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 15px;
  width: 100%;
  outline: none;
  transition: border 0.3s;
}

select:focus,
input[type="text"]:focus {
  border-color: #3498db;
}


input[type="submit"] {
  padding: 12px;
  background: #3498db;
  color: white;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s, transform 0.2s;
}

input[type="submit"]:hover {
  background: #2980b9;
  transform: scale(1.05);
}
.resultado {
  margin-top: 15px;
  padding: 12px;
  background: #ecf6ff;
  border-left: 5px solid #3498db;
  border-radius: 6px;
  font-weight: bold;
  color: #2c3e50;
}
</style>
</head>
<body>
<form action="" method="post">
        <br>
     
        <label>Informe a sua data de nascimento</label>
        <input type="text" name="prod">
        <br>
        <input type="submit" name="btnCalcular" value="Calcular">
        </form>
  

        <?php

$Data = $_POST['prod'];

 $PROD = 2025 - $Data; 


if ($PROD <12){

    echo"<div class='resultado'>Sua idade é $PROD - criança</div>";

}
else if($PROD > 12 && $PROD <18){

    echo"<div class='resultado'>Sua idade é $PROD - adolescente</div>";

}
elseif($PROD < 60 && $PROD >18){

    echo"<div class='resultado'>Sua idade é $PROD - adulto</div>";
}
else{

    echo"<div class='resultado'>Sua idade é $PROD - idoso</div>";
}


        ?>
</body>
</html>