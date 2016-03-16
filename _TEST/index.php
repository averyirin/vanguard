<?php
$current_page="home";

include"util/routing_path.php";

include "view/header.php";
include "account/login_modal.php";
?>s

            <!-- *** JUMBOTRON *** -->
        <section class="no-mb">
            <div class="jumbotron">
                <div class="dark-mask"></div>
                <div class="container">
                    <div class="row mb-small">
                        <div class="col-sm-12 text-center">
                            <h1>Hello World</h1>
                            <h2>Last week more than 100 companies signed up to
                            help them in their projects.</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-small"><img alt="" class=
                        "img-responsive" src="img/template-mac.png"></div>
                        <div class="col-sm-6 text-center-xs">
                            <p class="text-uppercase">Business. Corporate.
                            Agency.<br>
                            Portfolio. Blog. E-commerce.<br>
                            We have covered everything.</p>
                            <p>See our current packages comparison<br>
                            to choose the right one for you.</p>
                            <p><a class=
                            "scroll-to btn btn-template-transparent-black"
                            href="#packages">See packages</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PACKAGES WE OFFER -->
        <section class="bar background-white no-mb" id="packages">
            <div class="container" data-animate="fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Packages we offer</h2>
                        </div>
                        <p class="lead">Pellentesque habitant morbi tristique
                        senectus et netus et malesuada fames ac turpis
                        egestas.</p>
                        <div class="row packages">
                            <div class="col-md-3">
                                <div class="package">
                                    <div class="package-header">
                                        <h5>Basic</h5>
                                    </div>
                                    <div class="price">
                                        <div class="price-container">
                                            <h4><span class=
                                            "currency">$</span>7</h4><span class="period">/
                                            month</span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i>100GB
                                        Storage</li>
                                        <li><i class="fa fa-check"></i>Own
                                        config file</li>
                                        <li><i class="fa fa-times"></i>Sharing
                                        Tools</li>
                                        <li><i class="fa fa-times"></i>Auto
                                        Backup</li>
                                        <li><i class="fa fa-times"></i>Extended
                                        Security</li>
                                    </ul><a class="btn btn-template-main" href=
                                    "account/login_register.php">Sign Up</a>
                                </div>
                            </div><!-- / END FIRST PACKAGE -->
                            <div class="col-md-3">
                                <div class="package">
                                    <div class="package-header">
                                        <h5>Standard</h5>
                                    </div>
                                    <div class="price">
                                        <div class="price-container">
                                            <h4><span class=
                                            "currency">$</span>21</h4><span class="period">/
                                            month</span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i>100GB
                                        Storage</li>
                                        <li><i class="fa fa-check"></i>Own
                                        config file</li>
                                        <li><i class="fa fa-times"></i>Sharing
                                        Tools</li>
                                        <li><i class="fa fa-times"></i>Auto
                                        Backup</li>
                                        <li><i class="fa fa-times"></i>Extended
                                        Security</li>
                                    </ul><a class="btn btn-template-main" href=
                                    "account/login_register.php">Sign Up</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="package">
                                        <div class="package-header">
                                            <h5>Premium</h5>
                                        </div>
                                        <div class="price">
                                            <h4><span class=
                                            "currency">$</span>53</h4><span class="period">/
                                            month</span>
                                        </div>
                                        <ul>
                                            <li><i class=
                                            "fa fa-check"></i>100GB
                                            Storage</li>
                                            <li><i class="fa fa-check"></i>Own
                                            config file</li>
                                            <li><i class=
                                            "fa fa-times"></i>Sharing
                                            Tools</li>
                                            <li><i class="fa fa-times"></i>Auto
                                            Backup</li>
                                            <li><i class=
                                            "fa fa-times"></i>Extended
                                            Security</li>
                                        </ul><a class="btn btn-template-main"
                                        href="account/login_register.php">Sign Up</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="package">
                                    <div class="package-header">
                                        <h5>Ultimate</h5>
                                    </div>
                                    <div class="price">
                                        <h4><span class=
                                        "currency">$</span>99</h4><span class=
                                        "period">/ month</span>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i>100GB
                                        Storage</li>
                                        <li><i class="fa fa-check"></i>Own
                                        config file</li>
                                        <li><i class="fa fa-times"></i>Sharing
                                        Tools</li>
                                        <li><i class="fa fa-times"></i>Auto
                                        Backup</li>
                                        <li><i class="fa fa-times"></i>Extended
                                        Security</li>
                                    </ul><a class="btn btn-template-main" href=
                                    "account/login_register.php">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- *** FOOTER ***
_________________________________________________________ -->
        <?php include("view/footer.php"); ?>