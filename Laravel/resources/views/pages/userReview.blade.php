<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Food Review Site</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #animatedArea{
    background:linear-gradient(to left , #8942a8 , #ba382f);
    width:100%;
    height:100vh;
    }

    #box_area{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        overflow:hidden;
        list-style:none;
        
      }
      #box_area li{
        position:absolute;
        display:block;
        list-style:none;
        width:25px;
        height:25px;
        background:rgba(255,255,155,0.2);
        animation:animate 20s linear  infinite; 
        bottom:-150px;       
      }
      #box_area li:nth-child(1){
        left:86%;
        width:80px;
        height:80px;
        animation-delay: 0s;
      }
      
      #box_area li:nth-child(2){
        left:2%;
        width:30px;
        height:30px;
        animation-delay: 1.5s;
        animation-duration:10s;
      }
      #box_area li:nth-child(3){
        left:32%;
        width:100px;
        height:100px;
        animation-delay: 2.5s;
      }
      #box_area li:nth-child(4){
        left:52%;
        width:80px;
        height:80px;
        animation-delay: 0s;
        animation-duration:10s;
      }
      #box_area li:nth-child(5){
        left:26%;
        width:20px;
        height:20px;
        animation-delay: 0s;
      }
      #box_area li:nth-child(6){
        left:72%;
        width:20px;
        height:20px;
        animation-delay: 3.5s;
        
      }
      #box_area li:nth-child(7){
        left:95%;
        width:20px;
        height:20px;
        animation-delay: 3.5s;
        
      }
      @keyframes animate{
        0%{
          transform:translateY(0) rotate(0deg);
          opacity:1;
        }
        100%{
          transform:translateY(-800px) rotate(360deg);
          opacity:0;
        }
      }
    </style>
</head>

<body>
<div id="restaurants" class="reservations-main pad-top-100 pad-bottom-100" >
<ul id="box_area">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>

    </ul>
<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">Your Opinion</h2>
                        </div>
        <div class="container" id="animatedArea">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                        <h4 class="form-title">REVIEW FORM</h4>
                        <p style="color:white">PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>

                        <!-- <form id="contact-form" method="post" class="reservations-box" name="contactform"> -->
                        {{ Form::open(array('url' => '/userReview' , 'method' => 'post'))  }}
                        @csrf 
                            
                            <br>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                <select name="food_name" id="food_name" required="required" data-error="Firstname is required.">
                                        <option selected disabled>Food Name</option>
                                        <option>Burger</option>
                                        <option>Pizza</option>
                                        <option>Pasta</option>
                                        <option>Sandwich</option>
                                        <option>Sub-Sandwich</option>
                                        <option>Chicken Fry</option>
                                        <option>Tandoori Chicken</option>
                                        <option>Biriyani</option>
                                        <option>Soup</option>
                                        <option>Fried Rice</option>
                                        <option>Papri Chat</option>
                                        <option>Casewnut Salad</option>
                                        <option>Faluda</option>
                                        <option>Ice Cream</option>
                                        <option>Hot Coffee</option>
                                        <option>Cold Coffee</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <!-- <input type="text" name="restaurant_name" id="restaurant_name" placeholder="Restaurant Name" required="required" data-error="Firstname is required."> -->
                                    <select name="restaurant_name" id="restaurant_name" required="required" data-error="Firstname is required.">
                                        <option selected disabled>Restaurant Name</option>
                                        <option>Cafe Login</option>
                                        <option>Cheese Lab</option>
                                        <option>Pizza Hut</option>
                                        <option>Pizza Burg</option>
                                        <option>Cafe Darbar</option>
                                        <option>Platinum Club</option>
                                        <option>Suchili</option>
                                        <option>Yuminet</option>
                                        <option>Take Out</option>
                                        <option>Shawrma House</option>
                                        <option>OZz Cafe</option>
                                        <option>Star Kabab</option>
                                        <option>Adda</option>
                                        <option>Vuter Bari</option>
                                        <option>Dark Music Cafe</option>
                                        <option>Guha</option>
                                        <option>Sultan's Dine</option>
                                        <option>Jomidari Voj</option>
                                        <option>Nobabi Voj</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name= 'area' id="area" required="required"> 
                                    <option selected disabled>Area</option>
                                      <option>Dhanmondi 32</option>
                                      <option>Dhanmondi 15</option>
                                      <option>Dhanmondi 7A</option>
                                      <option>Dhanmondi 27</option>
                                      <option>Dhanmondi 9A</option>
                                      <option>Jigatola</option>
                                      <option>Panthopath</option>
                                      <option>Gulshan</option>
                                      <option>Banani</option>
                                      <option>Uttora</option>
                                      <option>Khilgaon</option>
                                      <option>Puran Dhaka</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name= 'comment' id="comment" required="required"> 
                                    <option selected disabled>Comments</option>
                                      <option>Excellent</option>
                                      <option>Very Good</option>
                                      <option>Good</option>
                                      <option>Average</option>
                                      <option>Below Average</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name= 'ratings' id="ratings" required="required"> 
                                    <option selected disabled>Ratings</option>
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                      <option>6</option>
                                      <option>7</option>
                                      <option>8</option>
                                      <option>9</option>
                                      <option>10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit"> DONE </button>
                                </div>
                            </div>
                            <!-- end col -->
                            {{ Form::close() }}

                        <div>
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <button class="btn btn-danger">   {{ __('Logout') }}</button>
                                    </a>
                                        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        <!-- end form -->
                        </div>
                  </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end restaurants-main -->
</body>    