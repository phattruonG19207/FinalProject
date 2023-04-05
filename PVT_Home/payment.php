<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!-- Css Link -->

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Title -->
<title>Real Estate PHP</title>
<style type="text/css">
        .main {
            background-color: lightblue;
            margin: 0 auto;
            padding: 20px;
            width: 50%;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #888888;
        }

        h3 {
            margin: 0;
            font-size: 28px;
            color: #333;
            text-align: center;
            margin-bottom: 25px;
        }

        .wrapper_method {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .payment {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        button {
            background-color: green;
            border: black;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<!--	Page Loader -->
<!-- <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div> -->

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        <div class = "main">
            <div class = "content">
                <div class = "Section group">
                    <div class = "content_top">
                        <div class = "heading">   
                        <h3>Online Payment</h3></div>
                        <div class = "clear"></div>
                        <div class = "wrapper_method">
                            <h3 class = "payment">Payment Method</h3>
                            <form action = "payment_gateways.php" method="Post">
                            <button class = "btn btn-warning" name="redirect">VNPay</button>
                            </form>
                            <a style="background:grey" href="vnpay.php"></a>
                            <?php

                                if (isset($_GET['vnp_ResponseCode']) && $_GET['vnp_ResponseCode'] == '00')
                                {

                                    echo "<script>alert('Payment success!');</script>";
                                    //hoặc có thể chuyển hướng người dùng tới trang hiển thị thông báo
                                    //header("Location: /payment-success.php");
                                }
                                //   else {
                                //     //Hiển thị thông báo lỗi cho người dùng
                                //     echo "Payment error: Error code" . $vnp_ResponseCode;
                                // }

                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

       <!--	Footer   start-->
		
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>

</div>
<!-- Wrapper End --> 
<?php include("include/footer.php");?>
<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
</body>

</html>