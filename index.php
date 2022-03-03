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
body {
  font-family: monospace;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #ffffff;
  color: black;
  padding: 14px 25px;
  margin: 8px 0;
  border: solid;
  cursor: pointer;
  width: 100%;
  border-radius: 14px;
  font-family: monospace;
}
button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color:#ffffff;
  float: left;
}
.imgcontainer {
  text-align: center;
  margin-top: 25px;
  margin: 5px 0 15px 0;
  position: relative;
}
img.avatar {
  cursor: grab;
  width: 70%;
  border-radius: 5%;
}
.container {
  padding: 20px;
  padding-bottom: 55px;
  border-radius: 25px;
}
span.psw {
  float: right;
  padding-top: 16px;
  border: 2px solid black;
}
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}
.modal-content {
  background-color: #ffffff;
  margin: 5% auto 15% auto; 
  border-radius: 25px;
  width: 20%; 
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #ffffff;
  font-size: 35px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
}
.cancelbtn {
     width: 100%;    
}
        </style>
    </head>
    <body class="shop_bg">
        
        <nav class="navbar navbar-expand-lg nav-bg"> 
            <div class="row container-fluid">

                <div class="col-sm-1">
                    <a class="titleFont" href="#">plantita</a>
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
                                    <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log In</button></li>
                                        <div id="id01" class="modal">
                                            <form class="modal-content animate" method="post">
                                                <div class="imgcontainer">
                                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                    <img src="resources/gif/plantssss.gif" alt="Avatar" class="avatar">
                                                </div>
                                                <div class="container">
                                                    <label for="uname"><b>Username</b></label>
                                                    <input type="text" placeholder="Enter Username" name="username" required>
                                                    
                                                    <label for="psw"><b>Password</b></label>
                                                    <input type="password" placeholder="Enter Password" name="password" required>
                                                    
                                                    <button type="submit">Log In</button>
                                                        
                                                    <center><span class="psw"><a href="#">Forgot Password?</a></span></center>
                                                </div>
                                                    <div class="container" style="background-color:#ffffff">
                                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    
                                    <li><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button></li>
                                        <div id="id02" class="modal">
  
                                            <form class="modal-content animate" method="post">
                                                <div class="imgcontainer">
                                                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                    <img src="resources/gif/plants1.gif" alt="Avatar" class="avatar">
                                                </div>

                                                <div class="container">
                                                    <label for="uname"><b>Email : </b></label>
                                                    <input type="text" placeholder="Enter Email" name="email" required>

                                                    <label for="psw"><b>UserName : </b></label>
                                                    <input type="text" placeholder="Enter Username" name="username" required>

                                                    <label for="psw"><b>Password : </b></label>
                                                    <input type="password" placeholder="Enter Password" name="password" required>

                                                    <button type="submit">Register Account</button>
                                                </div>
                                                <div class="container" style="background-color:#ffffff">
                                                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
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
        var modal = document.getElementById('id01');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
        <script>
        var modal = document.getElementById('id02');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
    </body>
</html>
