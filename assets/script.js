/* global $user */

$(document).ready(function () {


    $("a[item]").click(function () {// kiveszi az összes anchor elemet aminek van item attributuma és mindegyikhez hozzáad egy click eseményt

        var id = $(this).attr('item');//anchor item attributuma kiveszi amire éppen clickeltünk
        $.ajax({
            type: "GET",
            url: "./index.php",
            data: {
                r: "kosar/add",
                id: id
            },
            success: function (data) {
               
                    alert("A terméket kosárba rakta(" + data + ")");
               
               
            },
            error: function (message) {
                alert(message.responseText);
            }
        })


    });


    $("label.plusbtn").click(function () {

        counter($(this), "+")


    });

    $("label.minusbtn").click(function () {

        counter($(this), "-")


    });

    $("button[deletebutton]").click(function () {


        var id = $(this).closest('tr.cardrow').attr('itemid');
        $.ajax({
            type: "GET",
            url: "./index.php",
            data: {
                r: "kosar/delete",
                id: id

            },
            success: function (id) {
                $('tr[itemid="' + id + '"]').closest('tr.cardrow').remove();
            },
            error: function (message) {
                alert(message);
            }
        })

    });

});

function counter(item, direction) {


    var id = $(item).closest('tr.cardrow').attr('itemid');
    $.ajax({
        type: "GET",
        url: "./index.php",
        data: {
            r: "kosar/counter",
            id: id,
            direction: direction
        },
        success: function (data) {
            var span = $(item).closest('td').find('span.qty').get(0);

            $(span).text(data);


        },
        error: function (message) {
            alert(message);
        }
    })



}
