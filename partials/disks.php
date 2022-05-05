<?php 
    include('./api/discs.php');
?>


<div id="app">
    <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-xl-6 py-5 justify-content-center">
        <?php foreach($discs as $disc){ ?>
            <div class="col py-3" >
                
                <div class="card h-100 align-items-center" > 
                    <img class="card-img-top"src="<?php echo $disc['poster'];?>">
                    <div class="card-body text-center">

                        <h5 class="card-title text-white">
                        <?php echo $disc['title'];?>
                        </h5>
                        <p class="card-text text-muted m-0"><?php echo $disc['author'];?></p>
                        <p class="card-text text-muted"><?php echo $disc['year'];?></p>

                    </div>
                </div>
            </div>
        <?}?>
        </div>
    </div>
</div>

