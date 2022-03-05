<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Plantita</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=La Belle Aurore' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="css/Plantita_styles.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
.home_bg {
  background-image: url('resources/img/homebg.jpg');
  background-repeat: no-repeat;
  background-position: bottom;
  background-size: contain;
  bottom: 0;
}
        </style>
    </head>
    <body class="shop_bg">
        <?php include 'topbar.php';?>
        <div class="home_bg">
            <div class="homeContent">
                <div class="homeText">
                    <h1>You<br>Grow<br>Girl!!!<h1>
                    <a class="btn btn-first" href="shopPage.php">Shop Now</a>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>