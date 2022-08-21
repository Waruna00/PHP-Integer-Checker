<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<style>

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_bq485nmk.json" background="transparent"  speed="1"  style="width: 100%; height: 100%; top:0px; position:fixed; z-index: -1" loop autoplay></lottie-player>
    
    
<?php
$n ;
    echo("
        <div id='card'>
            <h3>
            PHP is a server scripting language and a powerful tool for making
            dynamic and interactive Web pages.<br><br>
            PHP is a widely-used, free, and efficient alternative to competitors such
            as Microsoft's ASP.
            </h3>
        </div>
    ");

    echo("
    <div id='card'>
        <h3>
            Random number generator<br>[between 1 - 10]
        </h3>
        <div id='Fcard'>
        <form method='POST'>
            <input name='randNumBtn' class='btnn' type='Submit' value='Click Me'>
        </form>
        </div>
        
    </div>
    ");

    if(isset($_POST ['randNumBtn'])){
        generate();
    }

    function generate(){
        $n = rand(1,10);
        echo("
            <div id='card' style = 'width: 90px; height: 90px'>
            <h2>$n</h2>
            </div>
        ");
    }


    echo("
    <div id='card'>
    <h3>Please Enter you name :</h3>
    <div id='Fcard' style='width: 355px; height: 100px'>
        <form method='POST'>
            <input name='name' id='name' placeholder='Type here' style='height: 35px; width: 250px' class='txtbox' type='text'>
            <input name='NameBtn' class='btnn' type='Submit' value='Click Me'>
        </form>
    </div>    
    
    ");

    if(isset($_POST['NameBtn'])){
        hello();
    }

    function hello(){
        $name = $_POST['name'];
        echo("<h3>Hi, My name is $name</h3> </div>");
    }

    echo("
    </div>
    <div id='card'>
    <h3>Enter any integer :</h3>
    <div id='Fcard' style='width: 355px; height: 100px'>
        <form method='POST'>
            <input name='i' id='i' style='height: 35px; width: 250px' placeholder='Type here' class='txtbox' type='text'>
            <input name='IntBtn' class='btnn' type='Submit' value='Click Me'>
        </form>
    </div>
    
    ");

    if(isset($_POST['IntBtn'])){
        Integer();
    }

    function Integer(){
        $i = $_POST['i'];
        if($i%2==0){
            echo("<h3>$i is an Even number</h3> </div>");
        }else{
            echo("<h3>$i is an Odd number</h3> </div>");
        }
        
    }
?>

</body>
</html>