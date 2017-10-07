<div class="row">
 <?php    foreach ($receptek as $recept) { ?>
                <!--Grid column-->
                <div class="col-lg-4 mb-4">
                    <!--Featured image-->
                    <div class="view overlay hm-white-slight z-depth-1">
                        <img src="<?=$recept['img'];?>" alt="First sample image" style="max-height: 300px;">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7 mb-4">
                    <!--Excerpt-->
                  
                    <h4 class="mb-4"><strong><?= $recept['nev'];?></strong></h4>
                    <p><?= $recept['elkeszites'];?>.</p>
                    <p>Szerző: <a><strong><?= $recept['szerzo'];?></strong></a></p>
                    <a class="btn btn-primary">Folytatás</a>
               </div>
                <!--Grid column-->

             <?php }?></div>