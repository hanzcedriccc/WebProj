<?php
echo '
        <nav class="navbar navbar-expand-lg nav-bg"> 
            <div class="row container-fluid">

                <div class="col-sm-1">
                    <a class="titleFont" href="homePage.php">plantita</a>
                </div>
                <div class="col-sm-6">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 float-end">
                        <li class="nav-item">
                            <a class="nav-link active navFont"  href="aboutusPage.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active navFont" href="shopPage.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle navFont" data-bs-toggle="dropdown">
                                    Account
                                </button>
                                <ul class="dropdown-menu">
                                    <li><button onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;" class="navFont dropbtn">Log In</button></li>
                                        <div id="id01" class="modal">
                                            <form class="modal-content animate" method="post">
                                                <div class="imgcontainer">
                                                    <span onclick="document.getElementById(\'id01\').style.display=\'none\'" class="close" title="Close Modal">&times;</span>
                                                    <img src="resources/gif/plantssss.gif" alt="Avatar" class="avatar">
                                                </div>
                                                <div class="container">
                                                    <label class="modalText" for="uname"><b>Username</b></label>
                                                    <input type="text" placeholder="Enter Username" name="username" required>
                                                    
                                                    <label class="modalText" for="psw"><b>Password</b></label>
                                                    <input type="password" placeholder="Enter Password" name="password" required>
                                                    
                                                    <button class="modalBtn modalText" type="submit">Log In</button>
                                                        
                                                    <center><span class="psw modalText"><a href="#">Forgot Password?</a></span></center>
                                                </div>
                                            </form>
                                        </div>
                                    
                                    <li><button onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;" class="navFont dropbtn">Sign Up</button></li>
                                        <div id="id02" class="modal">
  
                                            <form class="modal-content animate" method="post">
                                                <div class="imgcontainer">
                                                    <span onclick="document.getElementById(\'id02\').style.display=\'none\'" class="close" title="Close Modal">&times;</span>
                                                    <img src="resources/gif/plants1.gif" alt="Avatar" class="avatar">
                                                </div>

                                                <div class="container">
                                                    <label class="modalText" for="uname"><b>Email : </b></label>
                                                    <input type="text" placeholder="Enter Email" name="email" required>

                                                    <label class="modalText" for="psw"><b>UserName : </b></label>
                                                    <input type="text" placeholder="Enter Username" name="username" required>

                                                    <label class="modalText" for="psw"><b>Password : </b></label>
                                                    <input type="password" placeholder="Enter Password" name="password" required>

                                                    <button class="modalBtn modalText" type="submit">Register Account</button>
                                                </div>
                                            </form>
                                        </div>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script>
        var modal = document.getElementById(\'id01\');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
        <script>
        var modal = document.getElementById(\'id02\');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
'
?>