<?php
    $car = $_POST['car'];
    $box = $_POST['bike'];
    $touge = $_POST['driftCar'];
    $redSuns = $_POST['scroll'];
    $song = $_POST['eurobeat'];
    
    $stuff = array("$car" => "<iframe width='560' height='315' src='https://www.youtube.com/embed/F_XbdTSnAkk' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br>", 
                "$box" => "<iframe width='560' height='315' src='https://www.youtube.com/embed/m6uUZSNLQaA' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br>", 
                "$touge" => "<iframe width='560' height='315' src='https://www.youtube.com/embed/HBRy4-__oh0' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br>",
                "$redSuns" => "<iframe width='560' height='315' src='https://www.youtube.com/embed/m4zv_pXi4z0' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br>",
                "$song" => "<iframe width='560' height='315' src='https://www.youtube.com/embed/F4Zi7hk4VpQ' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br>"
                );
    
    if($car != "Volvo" && $car != "volvo"){
        $stuff[$car] = "<iframe width='560' height='315' src='https://www.youtube.com/embed/eZrttdOlMxw' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br>";
    }
    
    if ($box != "Bike"){
        $stuff[$box] = "<iframe width='560' height='315' src='https://www.youtube.com/embed/zazapB76Z-I?start=15' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br>";
    }
    
    if ($touge != "AE86"){
        $stuff[$touge] = "<iframe width='560' height='315' src='https://www.youtube.com/embed/5Y9E6U1Te6U' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br>";
    }
    
    if($redSuns != "FC"){
        $stuff[$redSuns] = "<iframe width='560' height='315' src='https://www.youtube.com/embed/zaDeLIlcq3M' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br>";
    }
    
    if ($song == 2){
        $stuff[$song] = "<audio controls autoplay>
                            <source src='/cst336-hw3/music/Crazy Little LoveNuage.mp3' type='audio/mpeg'>
                         </audio>";
    }
    
    if($song == 3){
        $stuff [$song] = "<audio controls autoplay>
                            <source src='/cst336-hw3/music/Initial D BOOM BOOM JAPAN.mp3' type='audio/mpeg'>
                         </audio>";
    }
?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <title>Car memes</title>
        <style>
            @import url(css/styles.css);
        </style>
    </head>
    <body>
        <h1>Welcome to drift memes</h1>
        <form action='index.php' method='post'>
            Enter a 'Volvo' for dope Volvo information, or not, up to you ¯\_(ツ)_/¯: <input type='text' name='car'></br> </br>
            <div id = "checkbox1">
                <input type="checkbox" name="bike" value="Bike">I have a bike<br>
            </div>
            
            <div id = "checkbox2">
                <input type="checkbox" name="bike" value="Car">I have a car<br><br>
            </div>
            
            <div id = "radio1">
                <input type="radio" name="driftCar" value="AE86">AE86<br>
            </div>
            
            <div id = "radio2">
                <input type="radio" name="driftCar" value="AE85">AE85<br><br>
            </div>
            
            <select name = "scroll">
                <option value="FC">RX-7 FC</option>
                <option value="FD">RX-7 FD</option>
            </select>
            
            <br><br>
            <input type="number" name="eurobeat" min="1" max="3"><br>
            <!--Last Name: <input type='text' name='lastname'>-->
            <input type='submit'>
            
            
        </form>
        
        <?php
            if (isset($car) && isset($box) && isset($touge) && isset($redSuns) && isset($song)) {
                //echo "<h2>Here are your memes</h2><br>";
                echo "$stuff[$car] $stuff[$box] $stuff[$touge] $stuff[$redSuns] $stuff[$song] </br>";
                
            }
        ?>
    </body>
</html>
