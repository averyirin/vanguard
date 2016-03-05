<footer id="footer">
            <div class="container">
                <!-- About -->
                

                <div class="col-md-4 col-sm-6">
                    <h4>About us</h4>

                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    
                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->
                
                <div class="col-md-4 col-sm-6">

                    <h4>Blog</h4>

                    <div class="blog-entries">
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="<?php echo $app_path; ?>img/img-logo.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="<?php echo $app_path;?>img/img-logo.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="<?php echo $app_path;?>img/img-logo.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Very very long blog post name</a></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>


                <div class="col-md-4 col-sm-6">

                    <h4>Contact</h4>
                    
                    <p>Here is how you can contact us at if need be, some text across the screen </p>

                    <p><strong>Universal Ltd.</strong>
                        <br>13/25 New Avenue
                        <br>Newtown upon River
                        <br>45Y 73J
                        <br>England
                        <br>
                        <strong>Great Britain</strong>
                    </p>

                    <a href="contact.php" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>

                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
                    <p align=center>© Copyright 2016 Vanguard Sensors</p>
                </div>
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->


    </div>
    <!-- /#all -->
    <!-- #### JAVASCRIPT FILES ### -->
    <script
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
    </script>
    <script src=
    "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
    </script> 
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script
        src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js">
    </script>
    <script src="<?php echo $app_path ?>js/jquery.cookie.js">
    </script>
    <script src="<?php echo $app_path ?>js/waypoints.min.js">
    </script>
    <script src="<?php echo $app_path ?>js/jquery.counterup.min.js">
    </script>
    <script src="<?php echo $app_path ?>js/jquery.parallax-1.1.3.js">
    </script>
    <script src="<?php echo $app_path ?>js/front.js">
    </script>
    <!-- owl carousel -->

    <script src="<?php echo $app_path ?>js/owl.carousel.min.js">
    </script>
    <?php if($current_page=="contact"){ ?>
    
    <!-- gmaps -->
     
    <script src=
    "https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false">
    </script> 
    <script src="<?php echo $app_path ?>js/gmaps.js">
    </script> 
    <script src="<?php echo $app_path ?>js/gmaps.init.js">
    </script> <!-- gmaps end -->

    <?php } ?>
</body>
</html>