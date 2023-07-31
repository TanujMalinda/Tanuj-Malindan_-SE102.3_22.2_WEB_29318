<html>
<head>
    </head>
<body>
    <?php
    $unit=180;
    
    if($unit<50){
        echo $unit*3.50;
    }
    else if($unit>51&&$unit<100){
        echo $unit*4.00;
    }
else if($unit>101&&$unit<150){
    echo $unit*5.20;
        
}
else if($unit >151){
    echo $unit*6.50;
}
    
    ?>
    
    </body>
</html>