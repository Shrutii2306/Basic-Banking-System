<?php
    session_start();
    $error = "";
    $success = "";
    if(isset($_GET['user_id']))
        $user_id = $_GET['user_id'];

    else
        $user_id = 0;

    #echo  $user_id;

    if (array_key_exists("submit", $_POST)) {
        
        $link = mysqli_connect("localhost", "root", "", "banking system");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }
        
        if (!$_POST['r-email'] || !$_POST['amount'] ) {
            
            $error= "One or more fields are empty<br>";
            
        } 
        
         else {
            
            
            
                $query = "SELECT id FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['r-email'])."'";

                $res = mysqli_query($link, $query);

                if (mysqli_num_rows($res) == 0) {

                    $error =  "That email address does not exists.";

                } 
                
                else 
                {
                    $amt = (float)$_POST['amount'];
                    #echo $amt;
                    $date =  date("Y-m-d");
                    $time = date("h:i:sa");
                    $sql = "UPDATE `users` SET `balance` = `balance` + ".$amt."  WHERE email = '".$_POST['r-email']."'";
                    $sql2 = "INSERT into transactions values( '".$_POST['r-email']."', '".$amt."', '".$time."', '".$date."')";
                    if (!mysqli_query($link, $sql) || !mysqli_query($link, $sql2)) {

                        $error =  "<p>Could not make the transaction - please try again later.</p>";

                    } 
                     else {

                        $success = "Trasaction successful";

                    }

                } 
                
            }
    }
?>

<html>
    <head>
        <title>Transfer Money</title>
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
                margin-left: 620;
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

            .alert{
                width:450;
                margin-left:400;
                margin-top:100;
                margin-bottom:-50;
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
        <?php 
            if($error!=""){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" >'.$error.'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            elseif($success!=""){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'.$success.'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        ?>
        <div class="center-content" >
        
            <div class="heading">
                Send Money!
            </div>
            <div class="row" style="margin-left:480;">
                
                   
                        <div class="card " style="max-width:500;margin-top:30;margin-left:80">
                            <div class="row " style="margin:20">
                                
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title" style="margin-left:45"></h5>
                                        <div style="margin-top:30">
                                        <form method="post" >

                                            <?php
                                                if($user_id==0)
                                                {
                                                    echo '
                                                    <p class="card-text"><span style="float:left;margin-bottom:5">Email :</span><input type="text" style="border:none;border-bottom:solid" placeholder="Recipient"  name="r-email"></p>';
                                                }

                                                else{

                                                    include 'config.php';
                                                    $query = "SELECT email from users where id = '".$user_id."'";
                                                    $result = $db->query($query);
                                                    $row = $result->fetch_assoc();
                                                    echo '
                                                    <p class="card-text"><span style="float:left;margin-bottom:5">Email :</span><input type="text" style="border:none;border-bottom:solid" placeholder="Recipient" value="'.$row['email'].'"   name="r-email"></p>';

                                                }

                                            ?>
                                            
                                            <p class="card-text"><span style="margin-bottom:5">Amount</span><input type="number" name="amount" style="border:none;border-bottom:solid"></p>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div style="margin-bottom:30">
                                <span style="margin-left:100;margin-bottom:30"><button type="submit" class="btn " name="submit">Send Money</button></span>
                            </div>
                            </form>
                        <div>
                      
            </div>
        </div>            
        </div>    
            
        </div>    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  

    </body>
</html>