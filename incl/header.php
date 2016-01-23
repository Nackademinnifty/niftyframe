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
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

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


    <nav id="navigation" class="nav navbar-default  noJsNavigation">
        <ul class="nav navbar-nav navbar-collapse collapse">
            <li><a class="home-" href="index.php">Home</a></li>
            <li><a class="contacts-" href="contact.php">Contact</a></li>
            <li><a class="works-" href="work.php">Works</a></li>
            <li><a class="about-" href="about.php">About</a></li>
        </ul>
    </nav>

    <div class="row">



        <div class="container-fluid">

            <?php if ($pageId == 'home')
        {
        echo "<video class='hidden-xs img-responsive' autoplay loop id='bgvid'>
            <source src='img/background.webm' type='video/webm'>
            <source src='img/background.mp4' type='video/mp4'>
        </video>";
            
        }?>



                <div class="menuWrapper">
                    <div class="menu">
                        <i id="bars" class="fa fa-bars"></i>
                        <i id="times" class="fa fa-times"></i>
                    </div>
                </div>


                <header <?php if(isset($pageId)) echo " id='$pageId' class='$pageId' "; ?>>
                    <h1 class="text-center logo">Nifty<span>.</span></h1>
                    <!--                <h1 class="logo"><?php if(isset($pageId)) echo "$pageTitle"; ?><span>.</span></h1>-->
                    <h3 class="currentPage"><?php echo $pageId; ?></h3>


                </header>
        </div>
    </div>
    <!-- End of row -->