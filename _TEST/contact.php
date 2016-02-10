<?php $current_page="contact";
$app_path="";?>
        <!-- NAVIGATION AND LOGIN MODAL-->
        <?php include("view/header.php"); ?>
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo $app_path; ?>index.php">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container" id="contact">
                <div class="row">
                    <div class="col-md-8">
                        <section>
                            <div class="heading">
                                <h2>We are here to help you</h2>
                            </div>
                            <p class="lead">Are you curious about something? Do
                            you have some kind of problem with our products? Just want to reach out to us?</p>
                            <p>Please feel free to contact us, our customer
                            service center is working for you 24/7.</p>
                            <div class="heading">
                                <h3>Contact form</h3>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=
                                            "firstname">Firstname</label>
                                            <input class="form-control" id=
                                            "firstname" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=
                                            "lastname">Lastname</label>
                                            <input class="form-control" id=
                                            "lastname" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" id=
                                            "email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=
                                            "subject">Subject</label>
                                            <input class="form-control" id=
                                            "subject" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for=
                                            "message">Message</label> 
                                            <textarea class="form-control" id=
                                            "message">
</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-template-main"
                                        type="submit"><i class=
                                        "fa fa-envelope-o"></i> Send
                                        message</button>
                                    </div>
                                </div><!-- /.row -->
                            </form>
                        </section>
                    </div>
                    <div class="col-md-4">
                        <section>
                            <h3 class="text-uppercase">Address</h3>
                            <p>13/25 New Avenue<br>
                            New Heaven<br>
                            45Y 73J<br>
                            England<br>
                            <strong>Great Britain</strong></p>
                            <h3 class="text-uppercase">Call center</h3>
                            <p class="text-muted">This number is toll free if
                            calling from Great Britain otherwise we advise you
                            to use the electronic form of communication.</p>
                            <p><strong>+33 555 444 333</strong></p>
                            <h3 class="text-uppercase">Electronic support</h3>
                            <p class="text-muted">Please feel free to write an
                            email to us or to use our electronic ticketing
                            system.</p>
                            <ul>
                                <li><strong><a href=
                                "mailto:">info@fakeemail.com</a></strong></li>
                                <li><strong><a href="#">Ticketio</a></strong> -
                                our ticketing support platform</li>
                            </ul>
                        </section>
                    </div>
                </div><!-- /.row -->
            </div><!-- /#contact.container -->
        </div><!-- /#content -->
        <div id="map"></div>

        <!-- *** FOOTER ***
_________________________________________________________ -->
        <?php include("view/footer.php"); ?>
