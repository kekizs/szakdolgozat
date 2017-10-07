<!--Grid column-->
  

 
<div class="row text-left" >
       <?php foreach ($termekek as $termek){?>
<div class="col-lg-4 col-md-6 mb-r">


    <div class="card" style="max-height: 350px; max-width: 350px;">


        <div class="view overlay hm-white-slight z-depth-1">
            <img src="<?= $termek["img"] ?>" class="img-fluid" alt="">
            <a>
                <div class="mask"></div>
            </a>
        </div>

        <a class="btn-floating btn-action" item="<?= $termek["id"] ?>"><i class="fa fa-shopping-cart"></i></a>


        <div class="card-body no-padding text-center">
            <!-- Title-->
            <h4 class="card-title mt-1 mb-2"><strong><a href=""><?= $termek["termeknev"] ?></a></strong></h4>


            <p class="card-text"<?= $termek["leiras"] ?>
        </p>


        <div class="card-footer d-flex justify-content-center">
            <span class="left" style="color:#5c3317"><strong><?= $termek["ar"] ?> Ft</strong> <!--<span class="discount">199$</span>--></span>

        </div>

    </div>


</div>


</div>  <?php } ?>
</div>

