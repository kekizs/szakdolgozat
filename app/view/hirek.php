<?php
$length=50;
?>
<div class="row text-left" >
    <?php    foreach ($hirek as $hir) { ?>
            <div class="col-lg-4 col-md-6 mb-r">
                <div class="card card-dark">
                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="<?= $hir['img'];?>" class="img-fluid" alt="" style="min-height: 262px;">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body" style="background-color: #3e2723">
                        <!--Social shares button-->
                        <a class="activator"><i class="fa fa-share-alt white-text"></i></a>
                        <!--Title-->
                        <h4 class="card-title" style="color: #fff"><?= $hir["cim"] ?></h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text white-text"><?php 
                       $szoveg=$hir['szoveg'];
                       
                        if(strlen($szoveg)>$length ){
                            
                            $szoveg= substr($szoveg,0,$length)."...";
                            
                            
                        }
                        echo $szoveg; ?></p>
                        <a href="./index.php?r=hir/hir/<?= $hir['id']?>"  class="d-flex flex-row-reverse">
                            <h5 class="waves-effect waves-light p-2">Tovább <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                    <!--/.Card content-->
                </div>
            </div>
    <?php }?>
        </div>
