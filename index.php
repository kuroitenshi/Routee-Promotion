<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Routee</title>
        <link href="Styles/bootstrap.min.css" rel="stylesheet" >          
        <link rel= "shortcut icon" href="Images/logo.png">
        <script src="Javascript/jquery-1.10.1.js"></script>

        <script>
            $(document).ready(function() {
                $window = $(window);

                $('section[data-type="background"]').each(function() {
                    var $scroll = $(this);

                    $(window).scroll(function() {
                        var yPos = -($window.scrollTop() / $scroll.data('speed'));
                        var coords = '50% ' + yPos + 'px';

                        // move the background
                        $scroll.css({backgroundPosition: coords});
                    });
                });
            });
            document.createElement("section");
        </script>

        <style>
            #topHead { 
                background: url(Images/2.jpg) 50% 0 fixed; 
                height: auto;  
                margin: 0 auto; 
                width: 100%; 
                position: relative; 
                box-shadow: 0 0 50px rgba(0,0,0,0.8);
                padding: 100px 0;
            }

            #reRoute { 
                background: url(Images/3.jpg) 50% 0 fixed; 
                height: auto;  
                margin: 0 auto; 
                width: 100%; 
                position: relative; 
                box-shadow: 0 0 50px rgba(0,0,0,0.8);
                padding: 200px 0;
            }

            #report { 
                background: url(Images/I-1.jpg) 50% 0 fixed; 
                height: auto;
                margin: 0 auto; 
                width: 100%; 
                position: relative; 
                box-shadow: 0 0 50px rgba(0,0,0,0.8);
                padding: 300px 0;                                
            }

            #about { 
                background: url(Images/I-1.jpg) 50% 0 fixed; 
                height: auto;
                margin: 0 auto; 
                width: 100%; 
                position: relative; 
                box-shadow: 0 0 50px rgba(0,0,0,0.8);
                padding: 300px 0;                                
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation" >  
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="Images/logo.png"></a>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">                              
                        <li class="active"><a href="#topHead">Home</a></li>          
                        <li class="active"><a href="#reRoute">Re-Routing</a></li> 
                        <li class="active"><a href="#report">Contribute</a></li> 
                        <li class="active"><a href="#about">About us</a></li> 
                    </ul>
                </div>
            </div> <!-- NAV BAR CONTAINER-->
        </div>  <!-- NAV BAR END-->     

        <!--Header Section-->
        <section id="topHead" data-speed="6" data-type="background">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </section>

        <!-- Re Routing Section -->
        <section id="reRoute" data-speed="4" data-type="background">
            <div class="container">

            </div>
        </section>

        <!-- Contribute Section -->
        <section id="report" data-speed="2" data-type="background">
            <div class="container">

            </div>
        </section>
        
        <!-- About Section -->
        <section id="about" data-speed="2" data-type="background">
            <div class="container">

            </div>
        </section>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    </body>
</html>
