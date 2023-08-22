<?php
    $r = $_POST["radius"];
    $area = $r**2*pi();
    $circumfrance = $r*2*pi();
    $volume = 4/3*pi()*$r**3;
    echo"area= {$area}<br>circumfrance= {$circumfrance}<br> volume= {$volume}"
?>
