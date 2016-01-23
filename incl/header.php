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
    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body<?php if(isset($pageId)) echo " class='$pageId' "; ?>>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <header <?php if(isset($pageId)) echo " id='$pageId' class='$pageId' "; ?>>
        <nav id="navigation" class="nav navbar-default  noJsNavigation">
            <div class="container">
                <div class="col-sm-12 col-sm-push-3 col-md-6 col-md-push-4 ">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav text-uppercase">
                            <li <?php if($pageId=='home') echo "class=active"; ?>><a href="index.php">Home</a></li>
                            <li <?php if($pageId=='contacts') echo "class=active"; ?>><a href="contact.php">Contact</a></li>
                            <li <?php if($pageId=='works') echo "class=active"; ?>><a href="work.php">Works</a></li>
                            <li <?php if($pageId=='about') echo "class=active"; ?>><a href="about.php">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </button>
        </nav>

        <div class="container-fluid fullscreen">
            <div class="row">

                <?php if ($pageId == 'home')
        {
        echo "<div class='container-fluid'><video class='hidden-xs' autoplay loop id='bgvid'>
            <source src='img/background.webm' type='video/webm'>
            <source src='img/background.mp4' type='video/mp4'>
        </video></div>";
            
        }?>

                    <h1 class="col-xs-12 col-xs-push-1 logo">Nifty<span>.</span></h1>
                    <h3 class="col-xs-12 text-uppercase currentPage"><?php echo "$pageId"; ?></h3>



                    <!--<div class="menuWrapper">
                    <div class="menu">
                        <i id="bars" class="fa fa-bars"></i>
                        <i id="times" class="fa fa-times"></i>
                    </div>
                </div>-->





  
    </div>
    <!-- End of row -->
    </div>
    <!-- End of container-fluid -->
      </header>