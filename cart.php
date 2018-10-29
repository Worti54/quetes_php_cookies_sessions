<?php

session_start ();
if (@$_POST['deconnexion'] == 'deconnexion')
{
    session_destroy ();
    header ('location: login.php');

}


if (!empty($_SESSION['loginname'])) {


    require 'inc/head.php'; ?>
    <section class="cookies container-fluid">
        <div class="row">
            <h2><?php echo $_SESSION['loginname'] . " votre panier contient : "?></h2>
            <ul>
                <li><?php if (@$_SESSION['pecanNuts']<> 0)
                {
                    echo @$_SESSION['pecanNuts'] . " Pecan nuts Cooked by Penny";
                }
                else
                    {
                    echo 0 . " Pecan nuts Cooked by Penny";
                    }
 ?></li>
                <li><?php if (@$_SESSION['choclateChips'] <> 0)
                    {
                        echo @$_SESSION['choclateChips'] . " Chocolate chips Cooked by Bernadette";
                    }
                    else
                    {
                        echo 0 . " Chocolate chips Cooked by Bernadette";
                    }
                    ?></li>
                <li><?php if (@$_SESSION['choclateCookie'] <> 0)
                    {
                        echo @$_SESSION['choclateCookie'] . " Chocolate cookie  Cooked by Bernadette";
                    }
                    else
                    {
                        echo 0 . " Chocolate cookie  Cooked by Bernadette";
                    }
                    ?></li>
                <li><?php if (@$_SESSION['MMSCookie'] <> 0)
                    {
                        echo @$_SESSION['MMSCookie'] . " M&M's&copy; cookies Cooked by Penny";
                    }
                    else
                    {
                        echo 0 . " M&M's&copy; cookies Cooked by Penny";
                    }
                    ?></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <form method="POST">
                    <input type="submit" class="btn btn-danger self-align-center" name="deconnexion" value="deconnexion"/>
                </form>
            </div>
        </div>
    </section>

    <?php
    require 'inc/foot.php';
}
    else
        {
    header ('location: login.php');
}?>

