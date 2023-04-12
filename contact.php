<?php include_once 'header.php'
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
            <div class="col"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="100%"></iframe></div>
            <div class="col-md-6 col-xl-6">
                <div>
                    <form class="p-3 p-xl-4" method="POST" action="confirmation.php">
                        <div class="mb-3">
                            <label class="form-label text-muted section-subheading" for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted section-subheading" for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted section-subheading" for="phone">Phone</label>
                            <input class="form-control" type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted section-subheading" for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Send </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'footer.php'
?>