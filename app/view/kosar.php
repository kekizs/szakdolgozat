<form method="POST" action="./index.php?r=kosar/veglegesit">

<h5 class="pt-1 pb-5">Shopping Cart table</h5>

            <!--Grid row-->
            <div class="row">
            
                <!--Grid column-->
                <div class="col-md-12">
            
                    <!--Shopping Cart table-->
                    <div class="table-responsive">
                        <table class="table product-table">
                            <!--Table head-->
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Termék</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Darabár</th>
                                    <th>Mennyiség</th>
                                    <th>Végösszeg</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <!--/Table head-->

                            <!--Table body-->
                            <tbody>
<?php foreach ( $termekek as $termek ){ ?>
                                <!--First row-->
                                <tr class="cardrow" itemid="<?= $termek['id'] ?>">
                                    <th scope="row">
                                        <img src="<?= $termek['img']?>" alt="" class="img-fluid">
                                    </th>
                                    <!--<td>
                                        <h5><strong> </strong></h5>
                                        <p class="text-muted">by FifeSteps</p>
                                    </td>-->
                                    <td><?= $termek['termeknev']?></td>
                                    <td><?= $termek['ar']?></td>
                                    <td>
                                         <span class="qty"><?= $termek['db']?> </span>
                                       <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-tb btn-primary btn-rounded minusbtn">
                                                <input type="radio" name="options" >&mdash;
                                            </label>
                                            <label class="btn btn-tb btn-primary btn-rounded plusbtn">
                                                <input type="radio" name="options" >+
                                            </label>
                                        </div>

                                    </td>
                                    <td><?php echo $termek['db']*$termek['ar']?> $</td>
                                    <td>
                                        <button type="button" deletebutton class="btn btn-tb btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
                                        </button>
                                    </td>
                                </tr>
                                <!--/First row-->
                        <?php }?>
                                

                            </tbody>
                            <!--/Table body-->
                        </table>
                    </div>
                    <!--/Shopping Cart table-->
            
                </div>
                <!--Grid column-->
            
            </div>
</form>          