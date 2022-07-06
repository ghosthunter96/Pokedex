<?php

    define ( 'DB_HOST', 'localhost' );
    define ( 'DB_USER', 'root' );
    define ( 'DB_PASS', '' );
    define ( 'DB_NAME', 'pokemondata' );
    
    $connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    $sql = "INSERT IGNORE INTO ".DB_NAME.".pokemons
            (                    
            `id_pokemon`,
            `nombre`,
            `img`)
            VALUES (                              
            '".$_GET['id_pokemon']."',
            '".$_GET['nombre']."',
            '".$_GET['img']."'
            );";            

            echo $sql;
   
    $result = mysqli_query($connection, $sql) or die("Error: " . mysqli_error($connection)." ".$sql);
    echo $result;
    mysqli_close($connection);
   
?>

