
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
    <!--LOGIN MODAL--><!--NOTE WE USING THE PHP LOGIN! -->
    <div id="loginModal" class="col-sm-4 offset-4 modal fade" role="dialog" aria-hidden="true">
        <div class=" modal-dialog " role="content">
            <!--Modal Content-->
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <img src="images/d.png" style="width: 70px; height: 70px;">&nbsp;<h4 class="modal-title">Mini Plant<br>Store</h4>
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
    <!--SHOP ICON samplecommit-->
    <a class="shopiconbtn" role="button" data-toggle="modal" data-target="#cart"><img class="fixed" src="images/aa.png" style="width: 70px; height: 70px;"><span class="badge total-count">0</span></a>
    <!--SHOP MODAL-->
    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="cartmodal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"  style="background-color: #1E2F23; border: 2px solid #B39C4D;">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="cartmodal"><strong>Cart</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" style="color: #B39C4D;">&times;</span></button>
                </div>
                <div class="modal-body">
                    <table class="show-cart table">
                        <div style="display: inline;"><strong>Product Name</strong></div>
                        <div class="offset-1" style="display: inline;"><strong>	&nbsp;	&nbsp;	&nbsp;Price</strong></div>
                        <div class="offset-3" style="display: inline;"><strong>Quantity</strong></div>
                        <div class="float-sm-right mr-4" style="display: inline;"><strong>Total</strong></div>
                        <div class="float-sm-right mr-5" style="display: inline;"><strong>Delete</strong></div>
                    </table>
                    <div>Total price: Php.<span class="total-cart"></span></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Order Now</button>
                    <button class="clear-cart btn btn-danger">Clear Cart</button>
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
                                <li class="nav-item offset-2  liheader"><a class="nav-link" href="index.php"> Home</a></li>                   
                                <li class="nav-item offset-2 liheader"><a class="nav-link" href="index.php #about" > About</a></li>                    
                                <li class="nav-item offset-2 active liheader"><a class="nav-link" href="shop.php" > Shop</a></li>                   
                                <li class="nav-item offset-2 liheader"><a class="nav-link" href="index.php #contact" > Contact</a></li>           
                            </ul>                  
                        </div>
                    </nav>
                </div>
            </div><br><br>

            <div class="row row-content">
                <div class="col-12 col-md-8">
                    <h1>A garden is a silent, loyal friend. And a great listner.</h1>
                    <p>As a Plant Store, We offer the best and largest selection of live plants for your home or office.</p>
                </div>
                <div class="col-12 col-md align-self-center">
                    <a href="userlogin/login.php" class="btn btn-block btn-info btn-lg" role="button">Login</a>
                </div>
            </div><br>
        </div>
    </header>

    <div class="container-fluid ">
        <!--Left Content-->
        <div class="left h-100 col-12 col-md-3 row row-content align-items-center ">
            <!--Categories-->
            <div class="col-12">
                <aside class="sidebar-categorie">
                    <h3 class="sidebar-title">Categories</h3><hr>
                    <ul class="navbar-nav" style="font-size: 17px;">
                        <li class="nav-item"><a class="nav-link" href="cacsuc.php">Cacti and Succulents <span class="ctgspan">(5)</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="plants.php">Indoor/Outdoor Plants<span class="ctgspan">(3)</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="flower.php">Flowers<span class="ctgspan">(3)</span></a></li>
                    </ul><br>
                </aside>
            </div>

            <div class="col-12">
                <!--Top Products-->
            <aside class="sidebar-topprod">
                <h3 class="sidebar-title">Top Rated Products</h3>
                <hr>
                <ul class="list-unstyled">
                    <a class="qwe prod-thumd" href="#">
                        <li class="media">
                            <img src="images/plant82px2.jpg" alt="Campfire Crassula">
                            <div class="media-body">
                                <h5 class="prod-title">Campfire Crassula</h5>
                                <div class="prod-pice">Php. 100.00</div>
                            </div>
                        </li>
                    </a>

                    <a class="qwe prod-thumd" href="#">
                        <li class="media">
                            <img src="images/plant82px3.jpg" alt="Aglaonema">
                            <div class="media-body">
                                <h5 class="prod-title">Aglaonema ‘Valentine’</h5>
                                <div class="prod-pice">Php. 150.00</div>
                            </div>
                        </li>
                    </a>

                    <a class="qwe prod-thumd" href="#">
                        <li class="media">
                            <img src="images/plant82px.jpg" alt="Ghost Plant">
                            <div class="media-body">
                                <h5 class="prod-title">Graptopetalum 'Ghost Plant'</h5>
                                <div class="prod-pice">Php. 200.00</div>
                            </div>
                        </li>
                    </a>
                </ul>
            </aside>
            </div>
            
            
            <!--Certificates-->
            <aside class="sidebar-certificates">
                <h3 class="sidebar-title">Certificates & Resume</h3><hr>
                <a class="nav-link" href="certificates/html5.pdf" target="_blank" download type="button"  style="display: inline-block;" ><img src="certificates/q.png" style=" height: 50px; width: 50px;" title="HTML 5"></a>
                <a class="nav-link" href="certificates/css3.pdf" target="_blank" download type="button"  style="display: inline-block;" ><img src="certificates/s.png" style=" height: 50px; width: 50px;" title="CSS 3"></a>
                <a class="nav-link" href="certificates/java.pdf" target="_blank" download type="button"  style="display: inline-block;" ><img src="certificates/as.png" style=" height: 50px; width: 50px;" title="JAVA"></a>
                <a class="nav-link" href="certificates/bootstrap4.pdf" target="_blank" download type="button"  style="display: inline-block;" ><img src="certificates/r.png" style="height: 50px; width: 50px;" title="Bootstrap 4"></a>
                <a class="nav-link" href="certificates/resume.pdf" target="_blank" download type="button"  style="display: inline-block;" ><img src="certificates/a.png" style="height: 50px; width: 50px;" title="Resume"></a>
            </aside>
            <br>
        </div>

        <!--Right Content-->
        <div class="right col-12 col-md-9 row row-content align-items-center">
            <div class="col-12">
                <h1 class="text-center">Shop All</h1>
            </div>
            <!--Product 1-->
            <div class="col-12 col-md-3 proditem align-items-center">
                <div class="card" id="prod1formodal" title="Quick View" role="button">
                    <img src="images/plant250px1.jpg" alt="Ghost Plant">
                    <div class="card-body text-center">Ghost Plant<br>Php. 100.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div> 
                </div>
                <a href="#" data-name="Ghost Plant" data-price="100" class="add-to-cart btn btn-info btn-block" role="button">Add to Cart</a>
                
                <!--Modal-->
                <div id="prod1" class="modal fade" role="dialog"  >
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content" style="background-color: #1E2F23; border: 2px solid #B39C4D;">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px; color: white !important;">x</button>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="images/suc3.jpg" alt="Ghost Plant" style="border: 5px solid #B39C4D; width: 300px; height: 350px;">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="images/plant82px.jpg" alt="Ghost Plant 1" style=" height: 60px; width: 70px; border: 1px solid #B39C4D;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="images/plant82px.jpg" alt="Ghost Plant 2" style=" height: 60px; width: 70px; border: 1px solid #B39C4D;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Ghost Plant</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 100.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 120.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        
                                        <a href="#" data-name="Ghost Plant" data-price="100" class="add-to-cart btn " role="button" style="background-color: #B39C4D; color: #1E2F23;">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 2-->
            <div class="col-12 col-sm-3 proditem">
                <div class="card" id="prod2formodal" title="Quick View" role="button" >
                    <img src="images/plant250px2.jpg" alt="Tupsy Succulent">
                    <div class="card-body text-center">Tupsy Succulent<br>Php. 150.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>   
                </div>
                <a href="#" data-name="Tupsy Succulent" data-price="150" class="add-to-cart btn btn-info btn-block"  role="button">Add to Cart</a>

                <!--Modal-->
                <div id="prod2" class="modal fade" role="dialog"  >
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content" style="background-color: #1E2F23; border: 2px solid #B39C4D;">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px; color: white;">x</button>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="images/plant250px2.jpg" alt="Tupsy Succulent" style="width: 350px; border: 4px solid #B39C4D;">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="images/plant250px2.jpg" alt="Ghost Plant 1" style="height: 60px; width: 70px; border: 1px solid #B39C4D;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="images/plant250px2.jpg" alt="Ghost Plant 2" style="height: 60px; width: 70px; border: 1px solid #B39C4D;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Tupsy Succulent</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 150.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 200.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        
                                        <a href="#" data-name="Tupsy Succulent" data-price="150" class="add-to-cart btn " role="button" style="background-color: #B39C4D; color: #1E2F23;">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 3-->
            <div class="col-12 col-sm-3 proditem">
                <div class="card" id="prod3formodal" title="Quick View" role="button">
                    <img src="images/plant250px3.jpg" alt="Campfire Crassula">
                    <div class="card-body text-center">Campfire Crassula<br>Php. 90.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>     
                </div>
                <a href="#" data-name="Campfire Succulent" data-price="90" class="add-to-cart btn btn-info btn-block"  role="button">Add to Cart</a>
                
                <!--Modal-->
                <div id="prod3" class="modal fade" role="dialog"  >
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content" style="background-color: #1E2F23; border: 2px solid #B39C4D;">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px; color: white;">x</button>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="images/plant250px3.jpg" style="height: 300px; width: 300px; border: 4px solid #B39C4D;"  alt="Campfire Crassula">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="images/plant250px3.jpg" alt="Campfire Crassula" style="height: 60px; width: 70px; border: 1px solid #B39C4D;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="images/plant250px3.jpg" alt="Campfire Crassula" style="height: 60px; width: 70px; border: 1px solid #B39C4D;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Campfire Succulent</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 90.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 100.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        
                                        <a href="#" data-name="Campfire Succulent" data-price="90" class="add-to-cart btn " role="button" style="background-color: #B39C4D; color: #1E2F23;">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 4-->
            <div class="col-12 col-md-3 proditem">
                <div class="card sad" id="prod4formodal" title="Quick View" role="button">
                   <img class="prod1" src="items/cacti/cac1.png" alt="Cactus 1">
                    <div class="card-body text-center">Cactus 1<br>Php. 80.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <a href="#" data-name="Cactus 1" data-price="80" class="add-to-cart btn btn-info btn-block"  role="button">Add to Cart</a>

                
                <!--Modal-->
                <div id="prod4" class="modal fade" role="dialog"  >
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content" style="background-color: #1E2F23; border: 2px solid #B39C4D;">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px; color: white;">x</button>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="items/cacti/cac1.png" style="height: 300px; width: 300px; border: 4px solid #B39C4D;"  alt="Cactus 1">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="items/cacti/cac1.png" alt="Cactus 1" style="height: 60px; width: 70px; border: 1px solid #B39C4D;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="items/cacti/cac1.png" alt="Cactus 1" style="height: 60px; width: 70px; border: 1px solid #B39C4D;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Cactus 1</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 80.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 100.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        
                                        <a href="#" data-name="Cactus 1" data-price="80" class="add-to-cart btn " role="button" style="background-color: #B39C4D; color: #1E2F23;">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 5-->
            <div class="col-12 col-md-3 proditem">
                <div class="card sad" id="prod5formodal" title="Quick View" role="button">
                    <img src="items/cacti/cac2.jpg" alt="succulent1"> 
                    <div class="card-body text-center">Cactus 2<br>Php. 150.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <button class="addtocard btn btn-info btn-block">Add to Cart</button>

                <!--Modal-->
                <div id="prod5" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px">x</button>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="items/cacti/cac2.jpg" style=" width: 350px;"  alt="Ghost Plant">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="items/cacti/cac2.jpg" alt="Ghost Plant 1" style="height: 60px; width: 70px;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="items/cacti/cac2.jpg" alt="Ghost Plant 2" style="height: 60px; width: 70px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Ghost Plant</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 75.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 100.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        <div class="quantity buttons_added">
                                            <div><label class="text-center" for="qty" style="font-weight: 700;">Quantity</label></div>
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1" class="input-text qty text" size="2" pattern="" inputmode="">
                                        </div><br>
                                        <div class="addtocart">
                                            <button data-mobile="true" data-hook="add-to-cart" class="atcbtnmodal btn" type="button"><span>Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 6-->
            <div class="col-12 col-md-3 proditem">
                <div class="card sad"  id="prod6formodal" title="Quick View" role="button">
                    <img src="items/cacti/goldenbarrel.jpg" alt="Golden Barrel">
                    <div class="card-body text-center">Golden Barrel<br>Php. 100.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <button class="addtocard btn btn-info btn-block">Add to Cart</button>

                <!--Modal-->
                <div id="prod6" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content">
                            <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px">x</button>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="items/cacti/goldenbarrel.jpg" style="height: 400px; width: 350px;" alt="Golden Barrel">
                                            
                                            <button type="button" class="picture" style="margin-top: 10px;">
                                                <img src="items/cacti/goldenbarrel.jpg" alt="Golden Barrel" style=" height: 50px; width: 50px;">
                                            </button>
        
                                            <button type="button" class="picture">
                                                <img src="items/cacti/goldenbarrel.jpg" alt="Golden Barrel" style=" height: 50px; width: 50px;">
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="title">
                                            <h3>Golden Barrel</h3>
                                        </div>
                                        
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <span class="newprice">
                                                    
                                                    <span class="p"  style="font-size: 21px;">Php. 75.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>

                                                <span class="oldprice">
                                                    <span class="p"   style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 100.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div>
                                        <hr>
                                        
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        
                                        <div class="quantity buttons_added">
                                            <div><label for="qty" style="font-weight: 700;">Quantity</label></div>
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1" title="qty" class="input-text qty text" size="2" pattern="" inputmode="">
                                        </div><br>

                                        <div class="addtocart">
                                            <button data-mobile="true" data-hook="add-to-cart" class="addtocartbutton btn" type="button"><span>Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 7-->
            <div class="col-12 col-md-3 proditem">
                <div class="card" id="prod7formodal" title="Quick View" role="button">
                    <img src="items/plants/plant1.jpg" alt="succulent1"> 
                    <div class="card-body text-center">Plant 1<br>Php. 100.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <button class="addtocard btn btn-info btn-block">Add to Cart</button>

                <!--Modal-->
                <div id="prod7" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px">x</button>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="items/cacti/cac1.png" style="height: 450px; width: 350px;"  alt="Ghost Plant">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 1" style="height: 60px; width: 70px;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 2" style="height: 60px; width: 70px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Ghost Plant</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 75.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 100.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        <div class="quantity buttons_added">
                                            <div><label class="text-center" for="qty" style="font-weight: 700;">Quantity</label></div>
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1" class="input-text qty text" size="2" pattern="" inputmode="">
                                        </div><br>
                                        <div class="addtocart">
                                            <button data-mobile="true" data-hook="add-to-cart" class="atcbtnmodal btn" type="button"><span>Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 8-->
            <div class="col-12 col-md-3 proditem">
                <div class="card" id="prod8formodal" title="Quick View" role="button">
                    <img src="items/plants/plant2.jpg" alt="succulent1"> 
                    <div class="card-body text-center">Plant 2<br>Php. 75.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <button class="addtocard btn btn-info btn-block">Add to Cart</button>

                <!--Modal-->
                <div id="prod8" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px">x</button>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="items/cacti/cac1.png" style="height: 450px; width: 350px;"  alt="Ghost Plant">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 1" style="height: 60px; width: 70px;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 2" style="height: 60px; width: 70px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Ghost Plant</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 75.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 100.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        <div class="quantity buttons_added">
                                            <div><label class="text-center" for="qty" style="font-weight: 700;">Quantity</label></div>
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1" class="input-text qty text" size="2" pattern="" inputmode="">
                                        </div><br>
                                        <div class="addtocart">
                                            <button data-mobile="true" data-hook="add-to-cart" class="atcbtnmodal btn" type="button"><span>Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 9-->
            <div class="col-12 col-md-3 proditem">
                <div class="card" id="prod9formodal" title="Quick View" role="button">
                    <img src="items/plants/plant3.jpg" alt="succulent1"> 
                    <div class="card-body text-center">Plant 3<br>Php. 75.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <button class="addtocard btn btn-info btn-block">Add to Cart</button>

                <!--Modal-->
                <div id="prod9" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px">x</button>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="items/cacti/cac1.png" style="height: 450px; width: 350px;"  alt="Ghost Plant">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 1" style="height: 60px; width: 70px;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 2" style="height: 60px; width: 70px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Ghost Plant</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 75.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 100.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        <div class="quantity buttons_added">
                                            <div><label class="text-center" for="qty" style="font-weight: 700;">Quantity</label></div>
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1" class="input-text qty text" size="2" pattern="" inputmode="">
                                        </div><br>
                                        <div class="addtocart">
                                            <button data-mobile="true" data-hook="add-to-cart" class="atcbtnmodal btn" type="button"><span>Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 10-->
            <div class="col-12 col-md-3 proditem">
                <div class="card" id="prod10formodal" title="Quick View" role="button">
                    <img src="items/plants/plant3.jpg" alt="succulent1"> 
                    <div class="card-body text-center">Plant 3<br>Php. 75.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <button class="addtocard btn btn-info btn-block">Add to Cart</button>

                <!--Modal-->
                <div id="prod10" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px">x</button>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="items/cacti/cac1.png" style="height: 450px; width: 350px;"  alt="Ghost Plant">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 1" style="height: 60px; width: 70px;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 2" style="height: 60px; width: 70px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Ghost Plant</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 75.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 100.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        <div class="quantity buttons_added">
                                            <div><label class="text-center" for="qty" style="font-weight: 700;">Quantity</label></div>
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1" class="input-text qty text" size="2" pattern="" inputmode="">
                                        </div><br>
                                        <div class="addtocart">
                                            <button data-mobile="true" data-hook="add-to-cart" class="atcbtnmodal btn" type="button"><span>Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 11-->
            <div class="col-12 col-md-3 proditem">
                <div class="card" id="prod11formodal" title="Quick View" role="button">
                    <img src="items/plants/plant3.jpg" alt="succulent1"> 
                    <div class="card-body text-center">Plant 3<br>Php. 75.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <button class="addtocard btn btn-info btn-block">Add to Cart</button>

                <!--Modal-->
                <div id="prod11" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px">x</button>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="items/cacti/cac1.png" style="height: 450px; width: 350px;"  alt="Ghost Plant">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 1" style="height: 60px; width: 70px;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 2" style="height: 60px; width: 70px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Ghost Plant</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 75.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 100.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        <div class="quantity buttons_added">
                                            <div><label class="text-center" for="qty" style="font-weight: 700;">Quantity</label></div>
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1" class="input-text qty text" size="2" pattern="" inputmode="">
                                        </div><br>
                                        <div class="addtocart">
                                            <button data-mobile="true" data-hook="add-to-cart" class="atcbtnmodal btn" type="button"><span>Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
            <!--Product 12-->
            <div class="col-12 col-md-3 proditem">
                <div class="card" id="prod12formodal" title="Quick View" role="button">
                    <img src="items/plants/plant3.jpg" alt="succulent1"> 
                    <div class="card-body text-center">Plant 3<br>Php. 75.00
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <button class="addtocard btn btn-info btn-block">Add to Cart</button>

                <!--Modal-->
                <div id="prod12" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="content">
                        <!--Modal Content-->
                        <div class="modal-content">
                            <button type="button" title="Close" class="close ml-auto" data-dismiss="modal" aria-label="Close" style="padding: 3px 10px 0px 0px">x</button>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="prodimage">
                                            <img src="items/cacti/cac1.png" style="height: 450px; width: 350px;"  alt="Ghost Plant">
                                            <a type="button" class="picture" style="margin-top: 10px;">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 1" style="height: 60px; width: 70px;">
                                            </a>
                                            <a type="button" class="picture">
                                                <img src="items/cacti/cac1.png" alt="Ghost Plant 2" style="height: 60px; width: 70px;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="pricewrapper">
                                            <div class="price">
                                                <h3>Ghost Plant</h3>
                                                <span class="newprice">
                                                    <span class="p"  style="font-size: 21px;">Php. 75.00</span>
                                                    <span class="sr-only">Sale Price</span>
                                                </span>
                                                <span class="oldprice">
                                                    <span class="p" style="text-decoration: line-through; color: dimgrey; font-size: 16px;">Php. 100.00</span>
                                                    <span class="sr-only">Regular Price</span>
                                                </span>
                                            </div>
                                        </div><hr>
                                        <div class="prod-details">
                                            This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent. This is a sample Succulent.
                                        </div><br>
                                        <div class="quantity buttons_added">
                                            <div><label class="text-center" for="qty" style="font-weight: 700;">Quantity</label></div>
                                            <input type="number" step="1" min="1" max="" name="quantity" value="1" class="input-text qty text" size="2" pattern="" inputmode="">
                                        </div><br>
                                        <div class="addtocart">
                                            <button data-mobile="true" data-hook="add-to-cart" class="atcbtnmodal btn" type="button"><span>Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal-->
            </div>
        </div>
    </div>

    <div class="col-12"  style="display: inline-block; margin-top: 20px; right: 30px;">
        <nav class="float-sm-right" aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class=" page-item disabled"><a class="page-link" href="#" tabindex="-1">&laquo;</a></li>
                <li class=" page-item active"><a class="page-link" href="#">1</a></li>
                <li class=" page-item"><a class="page-link" href="cacsuc.php">2</a></li>
                <li class=" page-item"><a class="page-link" href="flower.php">3</a></li>
                <li class=" page-item"><a class="page-link" href="cacsuc.php">&raquo;</a></li>
            </ul>
        </nav>
    </div>

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

    <script src="shopjs/shopscript.js"></script>
    <script src="shopmodaljs/myjs.js"></script>

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