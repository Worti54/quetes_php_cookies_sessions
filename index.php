<?php

session_start ();
if (@$_POST['deconnexion'] == 'deconnexion')
{
    session_destroy ();
    header ('location: login.php');


}


if (!empty($_SESSION['loginname'])) {


    if(@$_GET['add_to_cart'] == 36)
    {
        @$_SESSION['choclateChips'] = $_SESSION['choclateChips'] + 1;
    }
    elseif (@$_GET['add_to_cart'] == 58)
    {
        @$_SESSION['choclateCookie'] = $_SESSION['choclateCookie'] + 1;
    }
    elseif (@$_GET['add_to_cart'] == 32)
    {
        @$_SESSION['MMSCookie'] = $_SESSION['MMSCookie'] + 1;
    }
    elseif (@$_GET['add_to_cart'] == 46)
    {
        @$_SESSION['pecanNuts'] = $_SESSION['pecanNuts'] + 1;
    }


    require 'inc/head.php'; ?>
    <section class="cookies container-fluid">
        <div class="row">


            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Pecan nuts</h3>
                        <p>Cooked by Penny !</p>
                        <a href="?add_to_cart=46" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate chips</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="?add_to_cart=36" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate cookie</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="?add_to_cart=58" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>M&M's&copy; cookies</h3>
                        <p>Cooked by Penny !</p>
                        <a href="?add_to_cart=32" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form method="POST">
                    <input type="submit" class="btn btn-danger self-align-center" name="deconnexion" value="deconnexion"/>
                </form>
            </div>
        </div>
    </section>

    <?php require 'inc/foot.php';


}
else
    {
        header ('location: login.php');
    }?>
