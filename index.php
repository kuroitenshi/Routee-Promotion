<!DOCTYPE html>	
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Routee</title>
        <link rel="shortcut icon" href = "img/logo.png">
        <!-- Bootstrap Core CSS -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- Custom Theme CSS -->
        <link href="css/grayscale.css" rel="stylesheet">
        <style>
            @font-face{
                font-family: textbody;
                src: url(fonts/Abeezee.otf);
            }

        </style>      

    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#page-top">                        
                        <img src="img/logo.png">
                    </a>
                </div>

                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="hidden">                            
                            <a href="#page-top"></a>
                        </li>					
                        <li class="page-scroll" >
                            <a href="#about">About</a>
                        </li>                    
                        <li class="page-scroll">
                            <a href="#reroute">Re-Routing</a>
                        </li>
                        <li class="page-scroll" id="contribute-toggle">
                            <a href="#contribute">Contribute</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#developers">Developers</a>
                        </li>
                    </ul>
                </div>                
            </div>            
        </nav>
        <section class="intro" >
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">Routee</h1>
                            <p class="intro-text">Your Re-routing best friend</p>
                            <div class="page-scroll">
                                <a href="#about" class="btn btn-circle">
                                    <i class="fa fa-angle-double-down animated"></i>                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--ABOUT SECTION-->
        <div class = "about-class">
            <section id="about" class="container about-section  text-center">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>What is Routee?</h2>
                        <p>Routee is a crowd-sourcing web application designed for drivers in the Philippines that experience the daily grind of  hectic road jams and hellish traffic. Routee is one of the budding web applications designed to assist in alleviating problems on the road but here are the reasons on why you should pick Routee:</p>

                        <div class="media">
                            <a class="pull-left">
                                <img class="media-object" src="img/check1.png">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Avert from being late to important occasions caused by clogged roads.</h4>
                            </div>
                            <br>
                            <br>
                            <a class="pull-left">
                                <img class="media-object" src="img/check1.png">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Never be left out with what is currently happening on the road.</h4>
                            </div>
                            <br>
                            <br>
                            <a class="pull-left">
                                <img class="media-object" src="img/check1.png">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Ignite your sense of citizenship by contributing for fellow drivers to see.</h4>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </section>
        </div>
        <!--RE ROUTING SECTION-->
        <section id="reroute" class="text-center">
            <div class="container">
                <div  class="row">
                    <h2>Stuck and don't know where to go?</h2>
                </div>
                <div class="row">
                    <div id="reroute-body" class="col-lg-5">
                        <p>Do you need to find your way going to places you'd like to go without the potential hassle of cloggedroads? Rerouting is what you're looking for!</p>
                        <br><br>
                        <p>Routee provides highly advanced re-reouting algorithms that can avoid nuiances on the road such as accidents, floods, constructions, heavy traffic, and many more!</p>
                    </div>
                    <div class="col-lg-7">
                        <img id='avoid' src='img/avoid.png' alt='Failed to load image'>
                    </div>

                </div>
            </div>

        </section>

        <!--CONTRIBUTE SECTION-->
        <section id="contribute" class="contribute-content">
            <div class="contribute-section">
                <div class="container">
                    <div class="row">                        
                        <br/>
                        <h1>Help your Fellow Drivers!</h1>                            
                        <p> Got a situation going on that may change the routes of major highways? </p> <br>
                        <h3> You can report on situations like....</h3>
                    </div>
                    <br />               

                    <div class="row">                                                 
                        <div class="col-md-2 col-md-offset-1">
                            <img class ="obstruction-image" src="img/accident.png"> <br/><br/>
                            <h4>Accidents</h4>
                        </div>

                        <div class="col-md-2">
                            <img class ="obstruction-image" src="img/construction.png"> <br/><br/>
                            <h4>Constructions</h4>
                        </div>

                        <div class="col-md-2">
                            <img class ="obstruction-image" src="img/flood.png"> <br/><br/>
                            <h4>Flood</h4>
                        </div>

                        <div class="col-md-2">
                            <img class ="obstruction-image" src="img/traffic.png"> <br/><br/>
                            <h4>Heavy Traffic</h4>
                        </div>

                        <div class="col-md-2">
                            <img class ="obstruction-image" src="img/other.png"> <br/><br/>
                            <h4>and Other events</h4>
                        </div>                                                                                                                          
                    </div>

                    <div class="row">
                        <h5>Just by plotting them in our map made possible with <a href="https://maps.google.com/">Google maps</a> You can help in warning your fellow drivers to avoid those areas and also help us for better re-routing schemes</h5>                        
                    </div>
                </div>
            </div>
        </section>

        <!--DEVELOPER SECTION-->
        <section id="developers" class="text-center">
            <div class="developer-section">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1>Developers</h1>
                    </div>

                    <div class = "col-lg-5">
                        <h3> Aldrich Gutierrez </h3>
                        <img class ="devImage" src="img/aldrich.png">
                        <br><br>
                        <p class ="description">
                            Aldrich is a cosplayer that lorem ipsum. lorem ipsum. lorem ipsum. lorem ipsum. lorem ipsum. lorem ipsum. 
                        </p>
                    </div>
                    <div class = "col-lg-5 col-lg-offset-2">
                        <h3> Timothy Rodriguez </h3>
                        <img class ="devImage" src = "img/tim.png">
                        <br><br>
                        <p class = "description">
                            Timothy is a blah blah blah. lorem ipsum. lorem ipsum. lorem ipsum. lorem ipsum. lorem ipsum. lorem ipsum.
                        </p>
                    </div>
                    <div class = "col-lg-5">
                        <h3> Joren Sorilla </h3>
                        <img class ="devImage" src = "img/joren.png">
                        <br><br>
                        <p class = "description">
                            Joren is a blah blah blah. lorem ipsum. lorem ipsum. lorem ipsum. lorem ipsum. lorem ipsum. lorem ipsum.
                        </p>
                    </div>
                    <div class = "col-lg-5 col-lg-offset-2">
                        <h3> Joshua Cruz </h3>
                        <img class ="devImage" src = "img/joshua.png">
                        <br><br>
                        <p class = "description">
                            Joren does not have a nice picture. Lorem ipsum. Lorem ipsum. Lorem ipsum. Lorem ipsum.Lorem ipsum.
                        </p>
                    </div>                    

                </div>
            </div>
        </section>
        <br />
        <footer id="footer">
            <div class="container text-center">
                <div class="row">                        
                    <div class="col-md-3 column col-md-offset-5">          
                        <h4>Follow Us</h4>
                        <a href="http://shawarmasan.tumblr.com/"><img class="social-icon" src= "img/Social_Icons/tumblr.png" ></a>
                        <br/>
                        <br/>
                        <h6>Copyright© Shawarma Proteges 2014</h6>
                    </div>                    
                </div>
            </div>
        </footer>
        <!-- Core JavaScript Files -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


        <!-- Custom Theme JavaScript -->
        <script src="js/grayscale.js"></script>

    </body>

</html>
