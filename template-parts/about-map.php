<?php if (get_field('footer_map')): ?>
    <div class="container col-12 col-lg-10 offset-lg-1 my-5">
        <div class="row gx-0 px-lg-5 m-lg-5">
            <div class="col-12 text-center">
                <h3 class="mb-4 fw-bold"><?php echo get_field('map_title'); ?></h3>
                <p class="fs-5"><?php echo get_field('map_subtitle'); ?></p>
                <div class="ratio ratio-4x3">
                    <!--?php the_field('footer_map'); ?-->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15783.550723239068!2d115.2639564!3d-8.5102855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d6c77c9d63f%3A0x93f2d70599d31eb!2sGolden%20Monkey%20Ubud!5e0!3m2!1sen!2sid!4v1711952888959!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>