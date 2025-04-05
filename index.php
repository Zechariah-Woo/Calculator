<?php 
extract($_POST);
if (isset($save)){
    switch ($ah) {
        case "+";
        $res = $num1 + $num2;
        break;
        case "-";
        $res = $num1 - $num2;
        break;
        case "*";
        $res = $num1 * $num2;
        break;
        case "/";
        $res = $num1 / $num2;
        break;
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <table border = "1" align="center">

        <tr>
            <th>Your result</th>
            <th><input type = "number" name="res" value="<?php echo $res?>"></th>
        </tr>
        <tr>
            <th>Enter first number</th>
            <th><input type = "number" name="num1"></th>
        </tr>
        <tr>
            <th>Enter second number</th>
            <th><input type = "number" name="num2"></th>
        </tr>

        <tr>
            <th>Choose operand</th>
            <th><select name = "ah">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </th>
        </tr>
        <tr>
            <th colospan = "2">
                <input type="submit" name = "save" value = "show result">
            </th>
        </tr>
        </table>
   
    </form>
</body>
</html>
