<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">

    <link rel="stylesheet" href="styles.css">

    <!--Icon/logo-->
    <link rel="icon" href="images/logo.png" type="image/x-icon">

    <title>Ornamental Plants</title>
</head>

<body>
    <div id="loginModal" class="col-sm-4 offset-4 modal fade" role="dialog" >
        <div class=" modal-dialog " role="content">
            <!--Modal Content-->
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <img src="images/logo.png" style="width: 70px; height: 70px;">&nbsp;<h4 class="modal-title">Mini Plant<br>Store</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="sr-only" for="email">Email Address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="email" placeholder="Username or email address">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label class="sr-only" for="password">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="password" placeholder="Password">
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Forgot password?</label>
                                </div>
                                <div class="">Don't have any account yet? <a href="#">Sign up</a></div><br>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <button type="submit" class="btn btn-primar btn-block" style="background-color: skyblue;">Log-in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <header class="jumbotron">
        <div class="container-fluid">    
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-dark navbar-expand-sm navbarheader">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand mr-auto" href="#"><img src="images/logo.png"  height="100px" width="100px"  alt="mylogo"></a> <h1 class="d-none d-md-block" >Ornamental <br> Plants Store</h1>                  
                        <div class="collapse navbar-collapse" id="Navbar">                      
                            <ul class="navbar-nav offset-3">
                                <li class="nav-item offset-2 active liheader"><a class="nav-link" href="#"> Home</a></li>                   
                                <li class="nav-item offset-2 liheader"><a class="nav-link" href="#about" style="color: #9dc5c3;"> About</a></li>                    
                                <li class="nav-item offset-2 liheader"><a class="nav-link" href="shop.php" style="color: #9dc5c3;"> Shop</a></li>                   
                                <li class="nav-item offset-2 liheader"><a class="nav-link" href="#contact" style="color: #9dc5c3;"> Contact</a></li>           
                            </ul>                  
                        </div>
                    </nav>
                </div>
            </div>
            <br>

            <div class="row row-header">
                <div class="col-12 col-sm-6"><br>
                    <h2>Flower Shop</h2>
                    <p>We make your life bloomer with the smell of love in our flowers.</p><br>
                    <h2>Garden Center</h2>
                    <p>Gardening is cheaper than therapy, and you get flowers! We offer the best and largest selection of live plants for your home or office.</p>
                </div>

                <div class="sample col-12 col-sm-3 align-self-center">
                    <address>Babag II, Lapu-Lapu City,<br>Cebu City, Philippines <br>
                        <i class="fa fa-phone fa-lg"></i> : +63 931 023 2183 <br>
                        <i class="fa fa-envelope fa-lg"></i> : <a href="mailto:kristeljuen@gmail.com" style="color: #f2f2f2;">kplantstore@gmail.com</a>
                    </address>
                </div>

                <div class="col-12 col-md align-self-center">
                    <a href ="https://samplelogin101.herokuapp.com/login.php" class="btn btn-block btn-info btn-lg" role="button">Login</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <!--Welcome-->
        <div class="row-header">
            <h2>Welcome Plantitas!</h2>
            <p>We offer the best and largest selection of live plants for your home or office.We offer the best and largest selection of live plants for your home or office.We offer the best and largest selection of live plants for your home or office.</p>
        </div>

        <!--Featured Plants-->
        <div class="row row-content align-items-center">
            <div class="col-12">
                <h1 class="text-center">Featured Plants</h1>
                <hr style="width:50%; margin-left:25% !important; margin-right:25% !important; height: 5px;"><br>               
            </div>
        </div>

        <div class="row row-content align-self-center">
            <div class="col-12 col-md-4">
                <div class="card  align-items-center" style="padding-top: 20px;">
                    <div class="card-title ">
                        <h5 class="capital text-center">Cacti & Succulents</h5>
                        <hr style="width:50%; height: 5px;" >
                    </div>
                    
                    <a href="cacsuc.php" class="btn shopbtn" role="button">Shop Collection</a>
                    <div class="card-body">
                        <img src="images/suc3.jpg " width="100%">
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card align-items-center" style="padding-top: 20px;">
                    <div class="card-title">
                        <h5 class="capital text-center">Indoor/Outdoor Plants</h5>
                        <hr style="width:50%; height: 5px;" >
                       
                    </div>
                    <a href="plants.php" class="btn shopbtn" role="button">Shop Collection</a>
                    <div class="card-body">
                        <img src="images/plant1.jpg" width="100%" >
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card align-items-center" style="padding-top: 20px;">
                    <div class="card-title">
                        <h5 class="capital text-center">Flowers</h5>
                        <hr style="width:50%; height: 5px;" >
                    </div>
                    
                    <a href="flower.php" class="btn shopbtn" role="button">Shop Collection</a>
                    <div class="card-body">
                        <img src="images/sunflower.jpg " width="100%">
                    </div>
                </div>
            </div>
        </div><br>
        
        <!--Shipping Content-->
        <div class="row row-content">
            <div class="col-12 col-md-4">
                <div class="single_shipping">
                    <div class="shipping_icon">
                        <i class="fa fa-truck fa-lg"></i>
                    </div>
                    <div class="shipping_content">
                        <h3>Free Delivery</h3>
                        <p>Free shipping around the world for all <br> orders over $120</p>
                    </div>
                </div>
            </div>
    
            <div class="col-12 col-md-4">
                <div class="single_shipping">
                    <div class="shipping_icon">
                        <i class="fa fa-credit-card fa-lg"></i>
                    </div>
                    <div class="shipping_content">
                        <h3>Safe Payment</h3>
                        <p>With our payment gateway, don't worry<br> about your information</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="single_shipping">
                    <div class="shipping_icon">
                        <i class="fa fa-handshake-o fa-lg"></i>
                    </div>
                    <div class="shipping_content">
                        <h3>Friendly Services</h3>
                        <p>You gave 30-days return guarantee for <br> every single order</p>
                    </div>
                </div>
            </div>
        </div><br>
        
        <!--About-->
        <div class="row row-content" id="about">
            <div class="col-12 col-md-6 aboutsam">
                <h1 style="padding-top: 10px;">Story</h1>
                <p class="text-justify">Gardening has been my passion as a kid. I often fill our back and front yard with plants that were new to my knowledge. My avant- garde style of cultivating plants hightened my curiousity up until now. The rays of the rising sun shining through the green foliage of my Garden inspires me the most. The radiance reflect everything from the small spiky cacti to the flowery orchids and vines in my yard.
                    There's always a rejuvinating element and vibrance around me. And it keeps me alive. This is the sole purpose of my website, to connect with people who share the same interests. To spread the wholesome energy and vigor of cultivating a small humble garden. 
            </div>
            <div class="col-md-3 sampleimg1"></div>
            <div class="col-md-3 sampleimg2"></div>
        </div>

        <div class="row row-content aboutsam">
            <div class="col-12 col-md-6 d-none d-md-block sampleimg3"></div>
            <div class="col-12 col-md-6 align-self-center">
                <h1 style=" text-align:center; font: size 97px;">BUY ONLINE <br>NOW & GET<br> 10% OFF!</h1>
            </div>
        </div><br><br>
        
        <!--Customer feedback-->
        <div class="row row-content">
            <div class="col-12 d-none d-md-block">
                <h1 class="text-center">What Our Costumers Says?</h1>
                <hr style="width:50%; margin-left:25% !important; margin-right:25% !important; height: 5px;"><br>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-12 text-center d-none d-md-block"><img src="images/q2.png" style="height: 40px; width: 70px;"></div>
        </div><br>

        <div class="row row-content align-items-center">
            <div class="col-12 d-none d-md-block">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="img offset-1"><img class="img-fluid" src="images/yoyoy.png" alt="yoyoyImage"></div>
                            
                            <div class="carousel-caption offset-1">
                                <p class="text-center">When a beautiful design is combined with powerful technology, it truly is an artwork. I love how my website operates and looks with this theme. Thank you for awesome product.</p>
                                <p class="font-italic">- Bo Yoyoy, CEO</p>
                            </div>
                        </div>
    
                        <div class="carousel-item ">
                            <div class="img offset-1"><img class=" img-fluid" src="images/kwikwik.png" alt="yoyoyImage"></div>
                            
                            <div class="carousel-caption offset-1">
                                <p >When a beautiful design is combined with powerful technology, it truly is an artwork. I love how my website operates and looks with this theme. Thank you for awesome product.</p>
                                <p class="font-italic">- Kwi Kwik, CEO</p>
                            </div>
                        </div>
    
                        <div class="carousel-item ">
                            <div class="img offset-1">
                                <img class="img-fluid" src="images/poknat.png" alt="poknat">
                            </div>
                            
                            <div class="carousel-caption offset-1">
                                <p>When a beautiful design is combined with powerful technology, it truly is an artwork. I love how my website operates and looks with this theme. Thank you for awesome product.</p>
                                <p class="font-italic">- Phok Nat, CEO</p>
                            </div>
                        </div>
                    </div>
    
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide="1" ></li>
                        <li data-target="#mycarousel" data-slide="2" ></li>
                    </ol>
    
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                </div>
            </div>  
        </div><br>

        <!--Contact-->
        <div class="row row-content  h-100 justify-content-center align-items-center" id="contact">
            <div class="col-12 col-sm-7">
                <form class="justify-content-center formcontact">
                    <h2 class="text-center">FOR SPECIAL REQUESTS & ORDERS</h2>
                    <hr>

                    <div class="form-group row">
                        <label for="firstname" class="col-md-3"> First Name:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="First Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lastname" class="col-md-3"> Last Name:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="emailid" class="col-md-3 col-form-label">Email: </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="emailid" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phonenum" class="col-md-3">Phone Number: </label>
                        <div class="col-md-9">
                            <input type="tel" class="form-control" id="telnum" name="phonenum" required placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="message" class="col-md-3 col-form-label">Message: </label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="message" name="message" rows="12" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col md-10">
                            <button type="submit" class="btn btn-primary btn-block"> Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><br>

    <!--Footer-->
    <footer class="footer">
        <div class="container  align-items-center">
            <div class="row">             
                <div class="col-12 col-sm-3">
                    <div class="text-center">
                        <h4 class="text-center title" style="letter-spacing: 0.45em;">OPENING HOURS</h4><br>
                        <p>Mon-Fri: &nbsp; <span class="ophrs" style="color:#f2f2f2;">07:00am - 05:00pm</span><br>
                        Sat-Sun: &nbsp; <span class="ophrs" style="color: #f2f2f2;">06:00am - 07:00pm</span></p>
                    </div><br>
                </div>
                <div class="col-12 col-sm-5 align-self-center">
                    <div class="text-center">
                        <h4 class="text-center title" style="letter-spacing: 0.45em;">OUR STORE</h4><br>
                        <address>Babag II, Lapu-Lapu City,<br>Cebu City, Philippines <br>
                            <i class="fa fa-phone fa-lg"></i> : +63 931 023 2183 <br>
                            <i class="fa fa-envelope fa-lg"></i> : <a href="mailto:kristeljuen@gmail.com" style="color: #f2f2f2;">kstore@gmail.com</a>
                        </address>
                    </div><br>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="text-center">
                        <h4 class="text-center title" style="letter-spacing: 0.45em;">Follow Us</h4><br>
                        <div class="text-center">
                            <a class="btn fa fa-google fa-lg fafooter rounded-circle" href="mailto:kristeljuen@gmail.com"></a>
                            <a class="btn fa fa-facebook fa-lg fafooter rounded-circle" href="http://www.facebook.com/profile.php?id="></a>
                            <a class="btn fa fa-skype fa-lg fafooter rounded-circle" href="https://join.skype.com/invite/wal52AGm8baz"></a>
                            <a class="btn fa fa-instagram fa-lg fafooter rounded-circle" href="https://www.instagram.com/krisqwerasdf/"></a>
                        </div>
                    </div>
                </div>
           </div><br>
           <div class="row justify-content-center">             
                <div class="col-12">
                    <p class="text-center">For Profile Use Only<br>© KRISTEL JUEN</p>
                </div>
           </div>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS.-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#mycarousel').carousel({interval:4000});
            
            $("#loginButton").click(function(){
                $("#loginModal").modal("toggle");
            });
        });
    </script>
</body>
</html>