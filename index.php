<?php 
    include 'db.php';
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <title>Dischi</title>
</head>


<body>
    <main>
        <?php foreach ($dischi as $elementi) { ?>
        <img src= "<?php echo $elementi['img'] ?>">
        <h2><?php echo $elementi['album']?></h2> 
        <h2><?php echo $elementi['autore']?></h2> 
        <h2><?php echo $elementi['anno']?></h2> 
         
    <?php }?>

    </main>
    
</body>
</html>