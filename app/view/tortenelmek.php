
<div class="row">
 <?php    foreach ($tortenelmek as $tori) { ?>
                <!--Grid column-->
                <div class="col-lg-4 mb-4">
                    <!--Featured image-->
                    <div class="view overlay hm-white-slight z-depth-1">
                        <img src="<?= $tori['img'];?>" alt="First sample image">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7 mb-4">
                    <!--Excerpt-->
                  
                    <h4 class="mb-4"><strong><?= $tori['cim'];?></strong></h4>
                    <p><?= $tori['szoveg'];?>.</p>
                    <p>Szerző: <a><strong><?= $tori['szerzo'];?></strong></a></p>
                    <a class="btn btn-primary">Folytatás</a>
               </div>
                <!--Grid column-->

             <?php }?></div>