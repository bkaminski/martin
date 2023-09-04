<main class="int-page-body">
    <div class="container pb-5">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, no posts or pages matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
    <div class="buildertrend-why">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="bt-bg mt-5"></div>
                </div>
                <div class="col-md-6 pt-5 pb-5">
                    <h3 class="text-white h1 pt-5 pb-5">Why We Use Buildertrend</h3>
                    <p class="text-white pb-5">Our simple online system lets you track the progress of your project with the click of a<br> button, or easily communicate with our team 24/7. It’s that easy.</p>
                    <p class="text-white">Check out some of the features you can benefit from when you choose to work with us!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="buildertrend-icons pt-5 pb-5">
        <div class="container text-center pt-5 pb-5">
            <div class="row">
                <div class="col-lg-4">
                    <i class="far fa-comments fa-fw fa-4x"></i>
                    <h4 class="text-red h2 pt-4">Communication</h4>
                    <p>Quickly access your project from the mobile app and get in touch with us if you have a question.</p>
                </div>
                <div class="col-lg-4">
                    <i class="fas fa-camera fa-fw fa-4x"></i>
                    <h4 class="text-red h2 pt-4">Photos</h4>
                    <p>View progress of the jobsite in real time when your contractor uploads a photo or video.</p>
                </div>
                <div class="col-lg-4">
                    <i class="fas fa-certificate fa-fw fa-4x"></i>
                    <h4 class="text-red h2 pt-4">Warranty</h4>
                    <p>Have an issue after the project is completed? Submit a warranty claim online and we'll schedule a technician right away.</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4">
                    <i class="far fa-calendar-alt fa-fw fa-4x"></i>
                    <h4 class="text-red h2 pt-4">Schedule</h4>
                    <p>Stay in the know. We'll keep you informed of upcoming events and deadlines.</p>
                </div>
                <div class="col-lg-4">
                    <i class="fas fa-shopping-cart fa-fw fa-4x"></i>
                    <h4 class="text-red h2 pt-4">Selections</h4>
                    <p>Easily pick everything you want online or on the mobile app. Select your flooring, appliances, paint colors, and more right from home.</p>
                </div>
                <div class="col-lg-4">
                    <i class="fas fa-arrow-circle-right fa-fw fa-4x"></i>
                    <h4 class="text-red h2 pt-4">Change Orders</h4>
                    <p>Thought of something you want to add to the project? Request changes online anytime and quickly receive a quote from your contractor.</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4">
                    <i class="far fa-edit fa-fw fa-4x"></i>
                    <h4 class="text-red h2 pt-4">Proposals</h4>
                    <p>Make your payments online with a credit card or e-check for ease and convenience.</p>
                </div>
                <div class="col-lg-4">
                    <i class="fab fa-cc-visa fa-fw fa-4x"></i>
                    <h4 class="text-red h2 pt-4">Online Payments</h4>
                    <p>Quickly access your project from the mobile app and get in touch with us if you have a question.</p>
                </div>
                <div class="col-lg-4">
                    <i class="far fa-money-bill-alt fa-fw fa-4x"></i>
                    <h4 class="text-red h2 pt-4">Budget</h4>
                    <p>Easily keep track of your budget so you know what's been spent and when upcoming payments are due.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="buildertrend-access">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-5 pb-5">
                    <h3 class="text-white h1 pt-5 pb-5">Online Access For Homeowners</h3>
                    <p class="text-white pb-5">Our simple online system makes it possible to access your project from any computer, tablet, or smartphone.</p>
                    <p class="text-white">
                        <a target="_blank" href="https://buildertrend.net/">
                            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/SITB_Button_Icon.png" alt="login to Buildertrend">
                        </a>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="bt-bg-access mt-5"></div>
                </div>
            </div>
        </div>
    </div>
</main>