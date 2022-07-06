<?php
define ( 'DB_HOST', 'localhost' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASS', '' );
define ( 'DB_NAME', 'pokemondata' );

$connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Pokemons Capturados</h1>
    <main>
        
            <?php
            
            $sql = "SELECT * FROM ".DB_NAME.".pokemons;";  
            $result=mysqli_query($connection,$sql);

            while($mostrar=mysqli_fetch_array($result)){
                ?>

                <div>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td></td>
                
           

     
            <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;" id="card">
                        <div class="card-body text-center">
                        <img class="card-img-top" src=<?php echo $mostrar['img'] ?> alt="" id="pokeImg" style="width: 18rem;">
                          <h5 class="card-title" id="pokeName"></h5>
                        </div>
                      </div>
                </div>
            </div>
        </div>

        

                </div>
<?php     
 }

?>
     
            
        </div>

    </main>
    <script src="app.js"></script>
</body>
</html>
