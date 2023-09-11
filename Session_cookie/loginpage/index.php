<?php
include("header.php");

if (isset($_REQUEST['prod1-submit'])) {
    $_SESSION['cartData'] = array("prod_title" => $_REQUEST['prod_title'], "prod_price" => $_REQUEST['prod_price'], "prod_quantity" => $_REQUEST['prod_quantity'], "prod_image" => $_REQUEST['prod_image']);
}
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>welcome to my webpage.</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui molestias impedit nostrum ducimus consequatur? Quidem, totam molestias magni accusamus dignissimos maiores voluptates ullam numquam a consequuntur dolorem modi accusantium earum!</p>
        </div>
    </div>
    <!-- <div class="row">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="image/7.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">product title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                <form method="post">
                    <div class="row">
                        <div class="col">
                            <span>&#8377;11000</span>
                        </div>
                        <div class="col">
                            <input type="hidden" name="prod_title" id="" value="prod_1">
                            <input type="hidden" name="prod_price" id="" value="1234">
                            <input type="hidden" name="prod_image" value="1.jpg" id="">
                            <input type="number" class="form-control" name="prod_quantity" id="1" value="1">
                        </div>
                    </div>



                    <div class="row">
                        <div class="col">
                            <button class="btn btn-sm btn-primary" type="submit" name="prod1-submit">Add To cart <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
            </div>
            </form>

        </div>
    </div> -->
</div>