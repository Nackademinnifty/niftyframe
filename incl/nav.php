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
                            <div class="col-xs-10 col-md-10">
                                <ul class="nav navbar-nav dropdown text-uppercase pull-right">
                                    <li <?php if($pageId=='home' ) echo "class=active"; ?>><a href="index.php">Home</a></li>
                                    <li <?php if($pageId=='contacts' ) echo "class=active"; ?>><a href="contact.php">Contact</a></li>
                                    <li <?php if($pageId=='works' || $pageId =='Craftfood' || $pageId =='Eko' || $pageId =='Training365' || $pageId =='Tittut' ) echo "class=active"; ?>><a href="work.php">Works</a></li>
                                    <li <?php if($pageId=='about' ) echo "class=active"; ?>><a href="about.php">About</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


           
       
        </div>  
          </nav>