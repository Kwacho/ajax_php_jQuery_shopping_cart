<div class="container shareCont">          
    <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>                 
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                                
                </button>
                <a class="navbar-brand" href="index.php">
                    <img class="img-responsive" alt="Brand" src="http://sharemyweb.com/wp-content/uploads/2016/01/Demo_site_logo.png">
                </a>

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">

                    <?php
                        /*  Display Menus from MySQL Database
                        *   Change 
                        **/
                        foreach($database->findMenuItem() as $menuItem){
    echo "<li class='active'><a id='{$menuItem['menuName']}' href=index.php?menu=".$menuItem["menuName"]
                            .">" . $menuItem['menuName']."</a></li>";
                        } 
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
</div>