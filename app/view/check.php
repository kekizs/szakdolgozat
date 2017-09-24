<?php
$osszeg = 0;
?>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>

<body>
    <h5 class="pt-1 pb-5">Shopping Cart table</h5>

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12" style="margin: 5px;" >

            <!--Shopping Cart table-->
            <div class="table-responsive">
                <h1> Kérem ellenőrizze rendelését </h1>
                <table class="table product-table">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Termék</th>

                            <th>Ár</th>
                            <th>Darab</th>

                            <th>Végösszeg</th>

                            <th></th>
                        </tr>
                    </thead>
                    <!--/Table head-->

                    <!--Table body-->
                    <tbody>
                        <?php foreach ($termekek as $termek) { ?>
                            <!--First row-->
                            <tr class="cardrow" itemid="<?= $termek['id'] ?>">
                                <th scope="row">
                                    <img src="<?= $termek['img'] ?>" alt="" class="img-fluid">
                                </th>
                                <!--<td>
                                    <h5><strong> </strong></h5>
                                    <p class="text-muted">by FifeSteps</p>
                                </td>-->
                                <td><?= $termek['termeknev'] ?></td>
                                <td><?= $termek['ar'] ?> Ft</td>
                                <td>
                                    <span class="qty"><?= $termek['db'] ?> </span>

                                </td>
                                <td><?php
                                    $osszeg += $termek['db'] * $termek['ar'];
                                    echo $termek['db'] * $termek['ar']
                                    ?> Ft</td>

                            </tr>
                            <!--/First row-->
                        <?php } ?>
                        <tr><td colspan="3"></td><td>
                                összesen:
                            </td>
                            <td>
                                <?= $osszeg; ?>
                                Ft
                            </td></tr>

                        <tr><td colspan="4"></td><td>

                                <a href="./index?r=kosar/check" class="btn btn-tb btn-primary waves-effect waves-light">Fizetés</a>
                                <div id="paypal-button-container"></div>




                                <div id="paypal-button-container"></div>

                                <script>

                                    // Render the PayPal button

                                    paypal.Button.render({

                                        // Set your environment

                                        env: 'production', // sandbox | production

                                        // Specify the style of the button

                                        style: {
                                            label: 'buynow',
                                            fundingicons: true, // optional
                                            branding: true, // optional
                                            size: 'small', // small | medium | large | responsive
                                            shape: 'rect', // pill | rect
                                            color: 'gold'   // gold | blue | silve | black
                                        },

                                        // PayPal Client IDs - replace with your own
                                        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

                                        client: {
                                            sandbox: 'ARSjQ_7wrxcbMLOGiFXgQidDQocCYKnN0p8saSU_Oqq7vR9lfOtFJXB-KM-iQD_g31Zx7f-H2OQ8bbUL',
                                            production: 'AQyKpVDJKaQA6gm_rL9nwKITx8YIdGmoZewILe_pGjH2F7b_kAmFIDNwP75L11XbgLzNdUxlobHaaHqO'
                                        },

                                        // Wait for the PayPal button to be clicked

                                        payment: function (data, actions) {
                                            return actions.payment.create({
                                                transactions: [
                                                    {
                                                       amount: { total:'1', currency: 'HUF'}
                                                    }
                                                ]
                                            });
                                        },

                                        // Wait for the payment to be authorized by the customer

                                        onAuthorize: function (data, actions) {
                                            return actions.payment.execute().then(function () {
                                                window.alert('Payment Complete!');
                                            });
                                        }

                                    }, '#paypal-button-container');

                                </script>

                            </td></tr>
                    </tbody>
                    <!--/Table body-->
                </table>
            </div>
            <!--/Shopping Cart table-->

        </div>
        <!--Grid column-->

</body>
amount: {total: <?= $osszeg; ?>, currency: 'HUF'}

sandbox: 'ARSjQ_7wrxcbMLOGiFXgQidDQocCYKnN0p8saSU_Oqq7vR9lfOtFJXB-KM-iQD_g31Zx7f-H2OQ8bbUL',
production: 'AQyKpVDJKaQA6gm_rL9nwKITx8YIdGmoZewILe_pGjH2F7b_kAmFIDNwP75L11XbgLzNdUxlobHaaHqO'