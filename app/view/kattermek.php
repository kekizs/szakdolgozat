<div class="row text-left" >

 <?php foreach ($katlistak as $katlista){?>

<div class="col-lg-4 col-md-6 mb-r">


    <div class="card">


        <div class="view overlay hm-white-slight z-depth-1">
            <img src="<?= $katlista["img"] ?>" class="img-fluid" alt="">
            <a>
                <div class="mask"></div>
            </a>
        </div>

        <a class="btn-floating btn-action" item="<?= $katlista["id"] ?>"><i class="fa fa-shopping-cart"></i></a>


        <div class="card-body no-padding text-center">
            <!-- Title-->
            <h4 class="card-title mt-1 mb-2"><strong><a href=""><?= $katlista["termeknev"] ?></a></strong></h4>


            <p class="card-text"<?= $katlista["leiras"] ?>
        </p>


        <div class="card-footer d-flex justify-content-center">
            <span class="left" style="color:#4285F4"><strong><?= $katlista["ar"] ?></strong> <!--<span class="discount">199$</span>--></span>

        </div>

    </div>


</div>


</div> 
 <?php } ?>
</div>