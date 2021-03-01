<?php 
    include 'db.php';
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="dist/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <title>Dischi</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="img/logo-calabria.png" alt="logomusic">
        </div>
    </header>
    <main>
        <?php foreach ($dischi as $elementi) { ?>
        <div class="box">
            <img src= "<?php echo $elementi['img'] ?>">
            <h3><?php echo $elementi['album']?></h3> 
            <h2><?php echo $elementi['autore']?></h2> 
            <h3><?php echo $elementi['anno']?></h3> 
        </div>
        <?php }?>
    </main>
    <footer>
            <ul>
                <li><button type="button" class="btn btn-social"><i class="fab fa-facebook-f"></i></button></li>
                <li><button type="button" class="btn btn-social"><i class="fab fa-twitter"></i></button></li>
                <li><button type="button" class="btn btn-social"><i class="fab fa-linkedin"></i></button></li>
                <li><button type="button" class="btn btn-social"><i class="fab fa-google"></i></button></li>
            </ul>
    </footer>
    
    <script src="dist/app.js" charset="utf-8"></script>
</body>
</html>