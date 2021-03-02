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