<?php
    //conectar al servidor

    

    $conectar=@mysqli_connect('localhost','u497924916_mgsolutionsyam','MGyampi1','u497924916_yampi');
   // $conectar=@mysqli_connect('localhost','root','','yampi');
    // $conectar=@mysqli_connect('localhost','u497924916_mgsolutions','MGtenis1','u497924916_tenis');

    //verificamos si conecta
    if(!$conectar){
        echo"No se conecto";
    }

    

?>