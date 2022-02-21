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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
.titleFont {
    font-family: 'La Belle Aurore';font-size: 30px;
    text-decoration: none;
    color:#000000;
    text-align: center;
}
.navFont {
    font-family: 'Courier New';font-size: 18px;
    color:#000000;
}
.nav-bg {
    background-color: #e5e5bf;
}

        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg nav-bg"> 
            <div class="row container-fluid">

                <div class="col-sm-1">
                    <a class="titleFont" href="#">plantita</a>
                </div>
                <div class="col-sm-5">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active navFont" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active navFont"  href="#">search bar</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-sm-6">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 float-end">
                        <li class="nav-item">
                            <a class="nav-link active navFont"  href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active navFont" href="#">
                                Cart
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle navFont" data-bs-toggle="dropdown">
                                    Account
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Log in</a></li>
                                    <li><a class="dropdown-item" href="#">Sign up</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </body>
</html>
