<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<?php
include "function.php";
if($_SERVER["REQUEST_METHOD"]=="POST"  && isset($_POST["itemID"])){
            $itemID= trim($_POST["itemID"],"()");
            addToCart($itemID);

           
};

?>

<body>
    <?php
    navBar();

    ?>
    <div class="list_view">

        <?php

        showList()

        ?>


        <div class="items_card">
            <form>
                <div class="card_con">

                    <div class="texts_card">
                        <p>dfsodfhalsfbas
                            asdalksdnalnda
                            asdadj
                        </p>
                        <p>zdfhaodasdhoasoxba
                            sdnklaodoad
                        </p>
                    </div>
                    <div class="img_card">
                        <img src="./images/book1.jpg">
                    </div>
                </div>
                <div class="item_button">
                    <button>View</button>
                </div>
            </form>
        </div>

        <div>
            <?php
            showSelected("null")

            ?>
        </div>


        <script src="" async defer></script>
</body>

</html>