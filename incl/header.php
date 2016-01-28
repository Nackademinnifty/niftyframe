<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
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
    <script src="js/maps.js"></script>
</head>

<body<?php if(isset($pageId)) echo " class='$pageId' "; ?>>

  <div class="container-fluid">  

    <header <?php if($pageId === 'home'){echo "id='$pageId' class='$pageId page-header-start'";}
    elseif ($pageId !='home') {echo " id='$pageId' class='$pageId page-header' ";}?>>
        

<?php include 'incl/nav.php'?>

        

        <div class="row svg-row">
               <div class="jumbotron">
                     <div <?php if($pageId === 'home'){echo "class='svglogo-start col-md-12'";}
                        elseif ($pageId !='home') {echo "class='svglogo col-md-12'";}?>> 
                        <a href="index.php"><?php include 'incl/logo.php'?></a>
                </div>

            <div class="col-xs-12 col-sm-12 col-sm-offset-1 col-md-12">
                <h3 class="text-uppercase hidden-md hidden-lg currentPage"><?php echo "$pageId"; ?></h3>
            </div>
            </div>
        </div>    

    </header>
