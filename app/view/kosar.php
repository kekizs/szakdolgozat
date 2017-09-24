

<h5 class="pt-1 pb-5">Shopping Cart table</h5>

            <!--Grid row-->
            <div class="row">
            
                <!--Grid column-->
                <div class="col-md-12" style="margin: 5px;" >
            
                    <!--Shopping Cart table-->
                    <div class="table-responsive">
                        <table class="table product-table">
                            <!--Table head-->
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Termék</th>
                           
                                    <th>Ár</th>
                                    <th>Darab</th>
                                   
                                    <th>Végösszeg</th>
                                    <th>Törlés</th>
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
                                    <td><?= $termek['ar']?> Ft</td>
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
                                    <td><?php echo $termek['db']*$termek['ar']?> Ft</td>
                                    <td>
                                        <button type="button" deletebutton class="btn btn-tb btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
                                        </button>
                                    </td>
                                </tr>
                                <!--/First row-->
                        <?php }?>
                                
                                <tr><td colspan="5"></td><td>
                                        
                                        <a href="./index.php?r=kosar/check" class="btn btn-tb btn-primary waves-effect waves-light">Fizetés</a>
                                    </td></tr>
                            </tbody>
                            <!--/Table body-->
                        </table>
                    </div>
                    <!--/Shopping Cart table-->
            
                </div>
                <!--Grid column-->
            
            </div>
          