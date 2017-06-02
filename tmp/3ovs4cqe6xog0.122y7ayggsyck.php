<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Duck Nguyen">
    <meta name="description" content="Duck Nguyen Portfolio Homepage">

    <title>Hug A Tree - Home</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    
    <script src="https://use.fontawesome.com/b9f1530c0e.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link href="./css/layout.css" rel="stylesheet">
    <link href="./css/index.css" rel="stylesheet">
</head>

<body>
    <div class="navbar-fixed-top">
        <div class="top-wrapper">
            <ul class="nav navbar-nav pull-right">
                <li><a href="">ABOUT</a></li> 
                <li>
                    <form class="form-inline">
                    <div class="input-group">
                        <span class="input-group-addon" id="site-search"><i class="fa fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="site search" aria-describedby="site-search">
                    </div>
                    </form>
                </li>
            </ul> 
        </div>
        <nav class="navbar navbar-default bottom-wrapper" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#home-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <div class="col-md-12">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="home-nav">
                    <ul class="nav navbar-nav">
                        <li id="logo"><img src="./images/hugatree.png" alt=""></li>
                        <li><a href="#">HIKING</a></li>
                        <li><a href="#">BIKING</a></li>
                        <li><a href="#">CHILLING</a></li>
                        <li><a href="#">JOIN</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="#">SIGNUP/ POST NEW/ LOGIN</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
    <div class="landscape" >
        <!-- Navigation -->
        <div class="display-text">
            <p class="text-center">EXPERIENCE WASHINGTON LIFE</p>
        </div>
    </div>
    
    <div class="col-md-12 page-content">
        <div class="container">
            <div class="col-md-4 box-1">
            <div class="media">
                <a href="index.html"> 
                <div class="media-left media-middle">
                    <i class="text-left fa fa-map" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                    <h4>HIKING TRAILS</h4>
                    <h2>See our hike guide</h2>
                </div>
                </a>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="media">
                <a href="index.html"> 
                <div class="media-left media-middle">
                    <i class="text-left fa fa-bicycle" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                    <h4>BIKING ROUTES</h4>
                    <h2>See our bike guide</h2>
                </div>
                </a>
            </div>
        </div>
        
        <div class="col-md-4 box-2">
            <div class="media">
                <a href="index.html"> 
                <div class="media-left media-middle">
                    <i class="text-left fa fa-binoculars" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                    <h4>CHILLING SPOTS</h4>
                    <h2>See our scenery guide</h2>
                </div>
                </a>
            </div>
        </div>
        </div>
    </div>
    
    <!-- FEATURED LOCATIONS START -->
    <div class="col-md-12 feature-heading">
        <h4 class="text-center">FEATURED LCOATIONS</h4>
    </div>
    
    <div class="col-md-12 feature-contents">
        <div class="container">
        <div class="col-md-4">
            <div class="card-box">
                <div class="card"> 
                    <img src="https://static.seattletimes.com/wp-content/uploads/2015/05/9544755a-f377-11e4-9a2c-0474b50dc961-780x520.jpg" class="img-thumbnail img-fluid"/>
                    
                    <div class="card-content">
                        <h3 class="text-center">Easy Pass Trail</h3>
                        <h2><i class="fa fa-hashtag" aria-hidden="true"></i>Hiking trail</h2>
                        <a href="#">Location: somewhere in Washington</a>
                        <p>Posted by: user1 <span class="pull-right">05/31/2017</span></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card-box">
                <div class="card"> 
                    <img src="https://cdn-files.apstatic.com/mtb/7005794_medium_1444246717.jpg" class="img-thumbnail img-fluid"/>
                    
                    <div class="card-content">
                        <h3 class="text-center">Tiger Mountain Loop</h3>
                        <h2><i class="fa fa-hashtag" aria-hidden="true"></i>Biking route</h2>
                        <a href="#">Location: somewhere else in Washington</a>
                        <p>Posted by: user2 <span class="pull-right">05/29/2017</span></p>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="col-md-4">
            <div class="card-box">
                <div class="card"> 
                    <img src="http://www.planetware.com/photos-large/USWA/us-washington-state-port-angeles.jpg" class="img-thumbnail img-fluid"/>
                    
                    <div class="card-content">
                        <h3 class="text-center">Hurricane Ridge</h3>
                        <h2><i class="fa fa-hashtag" aria-hidden="true"></i>Chilling spot</h2>
                        <a href="#">Location: somewhere else in Washington</a>
                        <p>Posted by: user3 <span class="pull-right">05/30/2017</span></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    <!-- FEATURED LOCATIONS ENDS -->
    
    <!-- ABOUT US START -->
    <div class="col-md-12 about-heading">
        <h4 class="text-center">ABOUT US</h4>
    </div>
    
    <div class="col-md-12 about-content">
        <div class="container">
            <div class="col-md-6 left-side">
                <h2>We're just two tree huggers spreading our love for nature and being outdoor. At hug-a-tree, we aim to connect people who enjoy being outdor, huggers for life.</h2>
                <h4>-Duck & Ostrich</h4>
            </div>
            <div class="col-md-6 right-side">
                <div class="col-md-7 text-right">
                    <h2><i class="fa fa-quote-left" aria-hidden="true"></i></h2>
                    <h4>
                        It is not so much for its beauty that the forest makes a claim upon men’s hearts,
                        as for that subtle something, that quality of air that emanation from old trees,
                        that so wonderfully changes and renews a weary spirit<br><small>-Robert Louis Stevenson</small>
                    </h4>
                </div>
                <div class="col-md-5">
                    <img src="http://4.bp.blogspot.com/-Te2SCadsDYE/USCoBKbL92I/AAAAAAAAC_o/FcOPBXJ0ARQ/s1600/559909_10200667431114010_1539788386_n.jpg" class="img-circle">
                </div>
            </div>
        </div>
    </div>
    
   
        
        <div class="col-md-12 bottom-landscape">..</div>
    
    
    <!-- ABOUT US ENDS -->
    
    <!-- FOOTER ENDS -->
    <footer>
        <div class="container">
            <div class="col-md-6 footer-left">
                <div class="col-md-6">
                    <h3>OUR GUIDES</h3>
                    <h4><a href="">Hiking</a></h4>
                    <h4><a href="">Biking</a></h4>
                    <h4><a href="">Chilling</a></h4>
                </div>
                <div class="col-md-6 creators">
                    <h3>CREATORS</h3>
                    <h4>Caleb Ostrander</h4>
                    <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-globe" aria-hidden="true"></i></a>
                    
                    <h4>Duck Nguyen</h4>
                    <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-globe" aria-hidden="true"></i></a>
                    
                </div>
            </div>
            <div class="col-md-6 footer-right">
                <div class="col-md-6">
                    <h3>CONTACT US</h3>
                    <p>
                        Hug-a-tree<br>
                        Kent Station, 417 Ramsay Way<br>
                        Suite 112, Kent, WA 98032<br>
                    </p>
                    <p>(253) 555-5555</p>
                </div>
                <div class="col-md-6 text-left">
                    <img src="./images/hugatree.png">
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER ENDS -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>