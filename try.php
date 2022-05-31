<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
</head>
<body>

    <form action="try.php" method="GET">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <button>Submit</button>
    </form>
    <?php
    #how to get data from a form(Beginner's method)
    $mite = $_GET['num1'];
    $mite1 =$_GET['num2'];
    echo $mite + $mite1;
# how to get data from a form(Pro's method)
    if(isset($_GET['num1']) && isset($_GET['num2'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        echo $num1 + $num2;
    }

    ?>
</body>
</html>