    <header>
        <!-- *** TOP ***
_________________________________________________________ -->
        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 contact">
                        <p class="hidden-sm hidden-xs">Contact us on +1 705 718
                        4255 or hello@vanguard.com.</p>
                        <p class="hidden-md hidden-lg"><a data-animate-hover=
                        "pulse" href="#"><i class="fa fa-phone"></i></a>
                        <a data-animate-hover="pulse" href="#"><i class=
                        "fa fa-envelope"></i></a></p>
                    </div>
                    <div class="col-xs-7">
                        <div class="social">
                            <a class="external facebook" data-animate-hover=
                            "pulse" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="external gplus" data-animate-hover=
                            "pulse" href="#"><i class=
                            "fa fa-google-plus"></i></a> <a class=
                            "external twitter" data-animate-hover="pulse" href=
                            "#"><i class="fa fa-twitter"></i></a> <a class=
                            "email" data-animate-hover="pulse" href=
                            "#"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="login">
                            <a data-target="#login-modal" data-toggle="modal"
                            href="#"><i class="fa fa-sign-in"></i> <span class=
                            "hidden-xs text-uppercase">Sign in</span></a>
                            <a href="customer-register.html"><i class=
                            "fa fa-user"></i> <span class=
                            "hidden-xs text-uppercase">Sign up</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- *** TOP END *** -->
        <!-- *** NAVBAR ***
    _________________________________________________________ -->
        <div class="navbar-affixed-top" data-offset-top="200" data-spy="affix">
            <div class="navbar navbar-default yamm" id="navbar" role=
            "navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand home" href=
                        "index.html"><img alt="Vanguard logo" class=
                        "hidden-xs hidden-sm" src="img/vanguard-logo.png">
                        <img alt="Vanguard logo" class="visible-xs visible-sm"
                        src="img/vanguard-logo-small.png"><span class=
                        "sr-only">Vanguard - go to homepage</span></a>
                        <div class="navbar-buttons">
                            <button class="navbar-toggle btn-template-main"
                            data-target="#navigation" data-toggle="collapse"
                            type="button"><span class="sr-only">Toggle
                            navigation</span> <i class=
                            "fa fa-align-justify"></i></button>
                        </div>
                    </div><!--/.navbar-header -->
                    <div class="navbar-collapse collapse" id="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown  <?php if($currentPage=="home") echo "active";?>">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="dropdown  
                            <?php if($currentPage=="products") echo "active";?>">
                             <a href="products.php">Products</a>
                            </li>
                            <li class="dropdown 
                            <?php if($currentPage=="about") echo "active";?>">
                            <a href="about.php">About Us</a>
                            </li>
                            <li class="dropdown 
                            <?php if($currentPage=="contact") echo "active";?>">
                            <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div class="collapse clearfix" id="search">
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input class="form-control" placeholder=
                                "Search" type="text"> <span class=
                                "input-group-btn"><button class=
                                "btn btn-template-main" type=
                                "submit"><span class=
                                "input-group-btn"><i class="fa fa-search"></i></span></button></span>
                            </div>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div><!-- /#navbar -->
        </div><!-- *** NAVBAR END *** -->
    </header><!-- *** LOGIN MODAL ***
_________________________________________________________ -->
    <div aria-hidden="true" aria-labelledby="Login" class="modal fade" id=
    "login-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss=
                    "modal" type="button">&times;</button>
                    <h4 class="modal-title" id="Login">Customer login</h4>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.html" method="post">
                        <div class="form-group">
                            <input class="form-control" id="email_modal"
                            placeholder="email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="password_modal"
                            placeholder="password" type="password">
                        </div>
                        <p class="text-center"><button class=
                        "btn btn-template-main"><i class="fa fa-sign-in"></i>
                        Log in</button></p>
                    </form>
                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href=
                    "customer-register.html"><strong>Register now</strong></a>!
                    It is easy and done in 1&nbsp;minute and gives you access
                    to special discounts and much more!</p>
                </div>
            </div>
        </div>
    </div><!-- *** LOGIN MODAL END *** -->
