<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $pageTitle; ?>
    </title>

    <!-- Bootstrap Stylesheets -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Our custom Stylesheet -->
    <link href="dist/css/style.css" rel="stylesheet">

    <!-- Favicons-->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">


    <!-- Externtal stylesheets for fonts & icons-->
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!--Google maps API-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(59.341135, 18.064717),
                zoom: 15,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</head>

<body<?php if(isset($pageId)) echo " class='$pageId' "; ?>>

  <div class="container-fluid">  

    <header<?php if($pageId === 'home') {

      echo " id='$pageId' class='$pageId fullscreen' ";
}

 elseif ($pageId !='home') {
     echo " id='$pageId' class='$pageId halfscreen' ";
}

    ?>>
        




        <nav class="nav navbar-default navbar-fixed-top">
         <div class="container">  
           <div class="navbar-header">
               <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </button>
               
               
           </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-7 col-md-offset-4">
                    <div id="navbar" class="navbar-collapse collapse">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-xs-offset-1 col-md-offset-0">
                                <ul class="nav navbar-nav text-uppercase center-block">
                                    <li <?php if($pageId=='home' ) echo "class=active"; ?>><a href="index.php">Home</a></li>
                                    <li <?php if($pageId=='contacts' ) echo "class=active"; ?>><a href="contact.php">Contact</a></li>
                                    <li <?php if($pageId=='works' ) echo "class=active"; ?>><a href="work.php">Works</a></li>
                                    <li <?php if($pageId=='about' ) echo "class=active"; ?>><a href="about.php">About</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


           
       
        </div>  
          </nav>



        <div class="row svg-row">
               <div class="jumbotron">
                     <div class="svglogo">
                        <?php include 'incl/logo.php'?>
                </div>

            <div class="col-xs-12 col-sm-12 col-sm-offset-1 col-md-12">
                <h3 class="text-uppercase hidden-md hidden-lg currentPage"><?php echo "$pageId"; ?></h3>
            </div>
            </div>
        </div>    

    </header>