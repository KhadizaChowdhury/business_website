<?php include_once('header.php');
?>

<header id="carouselExampleCaptions" class="carousel slide masthead">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="assets/img/header-bg.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
        <div class="carousel-caption d-none d-md-block">
            <div class="intro-text">
                <div class="intro-lead-in">
                    <span>Welcome to Creative Nest!</span>
                </div>
                <div class="intro-heading text-uppercase">
                    <span>Handcrafted Home Decor<br/>to Inspire Creativity and Warmth</span>
                </div>
            </div>
        </div>
        </div>
        <div class="carousel-item">
        <img src="assets/img/header-bg.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
        <div class="carousel-caption d-none d-md-block">
            <div class="intro-text">
                <div class="intro-lead-in">
                    <span>Welcome to Creative Nest!</span>
                </div>
                <div class="intro-heading text-uppercase">
                    <span>Handcrafted Home Decor<br/>to Inspire Creativity and Warmth</span>
                </div>
            </div>
        </div>
        </div>
        <div class="carousel-item">
        <img src="assets/img/header-bg.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
        <div class="carousel-caption d-none d-md-block">
            <div class="intro-text">
                <div class="intro-lead-in">
                    <span>Welcome to Creative Nest!</span>
                </div>
                <div class="intro-heading text-uppercase">
                    <span>Handcrafted Home Decor<br/>to Inspire Creativity and Warmth</span>
                </div>
            </div>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</header>

<?php
    include_once 'templates/service_temp.php';
    include_once 'templates/port_temp.php';
    include_once 'templates/about_temp.php';
    include_once 'templates/team_temp.php';
    include_once 'templates/clients_temp.php';
?>

<section id="contact" style="background-image: url('assets/img/map-image.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase section-heading">Contact Us</h2>
                <h3 class="text-muted section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="contactForm" method="POST" action="confirmation.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Your Name *" required="">
                                <small class="form-text text-danger flex-grow-1 lead"></small>
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Your Email *" required="">
                                <small class="form-text text-danger lead"></small>
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" type="tel" id="phone" name="phone"placeholder="Your Phone *" required="">
                                <small class="form-text text-danger lead"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required=""></textarea>
                                <small class="form-text text-danger lead"></small>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php 
    include_once 'footer.php';
?>