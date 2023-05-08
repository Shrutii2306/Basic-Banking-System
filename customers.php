<?php
    session_start();
?>
<html>
    <head>
        <title>All Customers</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!--link href="bootstrap-5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"-->
        
        <script src="https://kit.fontawesome.com/7f2f566b78.js" crossorigin="anonymous"></script>
        <style>
        
            .navbar{
                background:none ;
            }

            .container{

                background: linear-gradient(to right,#aaeeff, white);
                overflow-x: hidden;
            }

            tsf-logo{
                height: 100;
                width: 100;
                margin-left: 30;
            }

            .icon{

                height: 20;
                color: black;
                margin-right: 7;
            }

            a{
                text-decoration: none;
            }

            .nav-bottom{
                background-color: black;
                opacity: 80%;
                color:white;
            }

            .icon-bottom{

                    height: 15;
            }
            
            .dollar-hand{

                margin-top: -100;
                width: 800;
                float: right;
                
                margin-left: 610;
                position:fixed;
            }

            
            img{
                user-select: none;
            }

            

            .center-content{

                z-index: 1;
                overflow: hidden;
                margin-top: 100;
                
                position: absolute;
                margin-left:-110;
            }

            
            .buttons{

                margin-top: 40;
                margin-left: 130;
            }

            .button-1{

                background:none;
                height: 40;
                width: 150;
                margin: 20;
            }

            .button-2{

                background-color: black;
                color: white;
                height: 40;
                width: 150;
                margin:20;
            }

            .heading{

                font-size: 40;
                margin-left: 500;
            }

            .card-img-top{
                height:100;
                width:100;
                margin-left: 90;
                margin-top:20;
                margin-bottom :10;

            }

            .btn{

                background : #BAF1FF;
            }
        </style>
        
    </head>
    <body class="container">
        <div >
            <nav class="navbar fixed-top">
                <div class="container-fluid">
                 <div class="tsf-logo"><a class="navbar-brand" href="index.html"  ><img src="../images/tsf-logo-2.svg" ><span>The Sparks Foundation</span></a></div>   
                  
                  <ul class="nav justify-content-end" >
                    <div style="margin-right: 30;">
                        <li class="nav-item">
                            <a class="nav-links" aria-current="page" href="customers.php" style="color: black;"><img src="../images/users-solid-black.svg" class="icon">All Customers</a>
                        </li>
                    </div>
                    <div style="margin-right: 30;">
                        <li class="nav-item">
                            <a class="nav-links" href="transactions.php" style="color: black;"><img src="../images/money-bill-transfer-solid-black.svg" class="icon">Transaction History</a>
                        </li>
                    </div>
                    <div style="margin-right: 20;">
                        <li class="nav-item">
                            <a class="nav-links" href="" style="color: black;"><img src="../images/circle-info.svg" class="icon">About</a>
                        </li>
                    </div>
                  </ul>
                </div>    
            </nav>
        </div>

        <nav class="navbar fixed-bottom nav-bottom">
            <div class="container-fluid">
              
              <ul class="nav">
                <li>
                    Find us here :  
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="https://www.thesparksfoundationsingapore.org/"><img src="../images/globe-solid.svg" class="icon-bottom"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.linkedin.com/company/the-sparks-foundation/"><img src="../images/linkedin.svg" class="icon-bottom"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.instagram.com/thesparksfoundation.info/?hl=en"><img src="../images/instagram.svg" class="icon-bottom"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.facebook.com/thesparksfoundation.info/"><img src="../images/square-facebook.svg" class="icon-bottom"></a>
                </li>
              </ul>

              <ul class="nav justify-content-end">
                <div style="margin-right: 40;">
                <li class="nav-item">
                  <a class="nav-links" aria-current="page" href="https://mail.google.com/mail/u/0/#inbox" style="color: white;text-decoration: none;"><img src="../images/envelope-regular.svg" class="icon-bottom" style="margin-right: 10;">support@gmail.com</a>
                </li>
                </div>
                
              </ul>
            </div>   
        </nav>

        <div class="money-in-hand">

            <img src="../images/dollar-in-hand.svg" class="dollar-hand">
            
        </div>
        
        <div class="center-content" >
                <div class="heading">All Registered Customers</div>
                
                <div class="row" style="margin-left:25;margin-bottom:70">
                    <?php

                        include_once 'config.php';
                        $query = "SELECT * FROM users";
                        $result = $db->query($query);

                        if ($result->num_rows > 0 ) {
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                <div class="col-3">
                                <div class="card" style="width: 18rem;margin-top:20">
                                    <img src="../images/user-'.$row['id'].'.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['name'].'</h5>
                                        <p class="card-text">email : '.$row['email'].'<br>account number :<br> '.$row['account number'].'</p>
                                        <span style="margin-left:65"><a href="profile.php?user_id='.$row['id'].'" class="btn " >View Profile</a></span>
                                        
                                    </div>
                                </div>    
                            </div>
                            </form>';
                            }
                        }
                    ?>
                
                    </div>   
                     
                </div>
            
        
    
    </body>
</html>