<!-- Footer -->
<footer id="footer" class="dark bg-secondary">

    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <!-- Widget - Contact -->
                <div class="widget widget-contact">
                    <h6 class="text-uppercase text-muted">Contact Us</h6>
                    <img src="<?php echo base_url();?>assets/img/photos/location-photo01.jpg" alt="" class="img-rounded mb-20">
                    <address>
                        <?php echo $this->settings->get('address') ?><br><br>
                        <strong>Phone:</strong><br>
                        <?php echo $this->settings->get('phone') ?><br><br>
                        <strong>E-mail:</strong><br>
                        <?php echo $this->settings->get('admin_email') ?><br>
                    </address>
                </div>
            </div>

            <div class="col-md-3">
                <!-- Widget - Recent posts -->
                <div class="Links">
                    <h6 class="text-uppercase text-muted">Other Links</h6>
                    <ul class="list-posts">
                        <li>
                            <a href="#">Media</a>
                        </li>
                        <li>
                            <a href="#">Partners</a>
                        </li>
                        <li>
                            <a href="#">Terms and Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <!-- Widget - Instagram -->
                <div class="widget widget-instagram">
                    <h6 class="text-uppercase text-muted">Instagram Feed</h6>
                    <div id="instagram-feed" class="instagram-grid clearfix" data-limit="6"></div>
                </div>
            </div>

            <div class="col-md-3">
                <!-- Widget - Newsletter -->
                <div class="widget widget-newsletter">
                    <h6 class="text-uppercase text-muted">Connect with Us</h6>
                    <a href="#" class="icon icon-square icon-facebook icon-xs"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon icon-square icon-twitter icon-xs"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon icon-square icon-google-plus icon-xs"><i class="fa fa-google-plus"></i></a>

                </div>
            </div>

        </div>
        <hr class="sep-line">
        <div class="row">
            <div class="col-sm-6 text-muted">
                Copyright <?php echo date("Y"); ?>©. All rights reserved.<br>
            </div>
            <div class="col-sm-6 text-right">

            </div>
        </div>
    </div>

</footer>
<!-- Footer / End -->
