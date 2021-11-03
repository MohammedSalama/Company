<?php include("includes/header.php"); ?>

<!-- ***** Welcome Area Start ***** -->
<section class="welcome-area">
    <div class="welcome-slides owl-carousel">

        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide">
            <!-- Background Curve -->
            <div class="background-curve">
                <img src="./img/core-img/curve-1.png" alt="">
            </div>

            <!-- Welcome Content -->
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-md-6">
                            <div class="welcome-text">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Uza makes your <br> biz
                                    <span>greater</span></h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on
                                    Digital Platforms</h5>
                                <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Our
                                    Portfolio</a>
                            </div>
                        </div>
                        <!-- Welcome Thumbnail -->
                        <div class="col-12 col-md-6">
                            <div class="welcome-thumbnail">
                                <img src="./img/bg-img/1.png" alt="" data-animation="slideInRight" data-delay="400ms">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide">
            <!-- Background Curve -->
            <div class="background-curve">
                <img src="./img/core-img/curve-1.png" alt="">
            </div>

            <!-- Welcome Content -->
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-md-6">
                            <div class="welcome-text">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Uza makes your <br> biz
                                    <span>greater</span></h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on
                                    Digital Platforms</h5>
                                <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Our
                                    Portofilo</a>
                            </div>
                        </div>
                        <!-- Welcome Thumbnail -->
                        <div class="col-12 col-md-6">
                            <div class="welcome-thumbnail">
                                <img src="./img/bg-img/1.png" alt="" data-animation="slideInRight" data-delay="400ms">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide">
            <!-- Background Curve -->
            <div class="background-curve">
                <img src="./img/core-img/curve-1.png" alt="">
            </div>

            <!-- Welcome Content -->
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-md-6">
                            <div class="welcome-text">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Uza makes your <br> biz
                                    <span>greater</span></h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on
                                    Digital Platforms</h5>
                                <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp"
                                    data-delay="700ms">Contact Us</a>
                            </div>
                        </div>
                        <!-- Welcome Thumbnail -->
                        <div class="col-12 col-md-6">
                            <div class="welcome-thumbnail">
                                <img src="./img/bg-img/1.png" alt="" data-animation="slideInRight" data-delay="400ms">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ***** Welcome Area End ***** -->
<!-- ***** Services Area Start ***** -->
<section class="uza-services-area section-padding-10-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Register</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-12 offset-2 col-lg-8">
                <div class="uza-contact-form mb-80">
                    <form action="handlers/handle-register.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-30" name="full_name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control mb-30" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control mb-30" name="password"
                                        placeholder="Password">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-30" name="job" placeholder="Job">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-30">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="user_image">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn uza-btn btn-3 mt-15 text-center" type="submit"
                                    name="register">Register</button>
                            </div>
                        </div>
                    </form>
                    <br>

                    <?php if(isset($_SESSION['errors'])) { ?>
                    <div class='alert alert-danger'>
                        <ul>
                            <?php foreach ($_SESSION['errors'] as $error){ ?>
                            <li>Error</li>
                            <?php }?>
                        </ul>
                    </div>
                    <?php }; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Services Area End ***** -->
<?php unset($_SESSION['errors']) ; ?>
<?php include("includes/footer.php"); ?>