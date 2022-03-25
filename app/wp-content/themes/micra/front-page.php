<?php get_header();
the_post(); ?>
    <main>
        <section class="mk-header-content">
            <?php the_content(); ?>
        </section>
        <section class="mk-main-say">
            <?php
            if ( have_rows( 'slider' ) ):
            $count  = 1;
            $nslide = 2;
            ?>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php while ( have_rows( 'slider' ) ) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="<?php echo $count ?>"
                                aria-label="Slide <?php echo $nslide ?>"></button>
                        <?php
                        $count ++;
                        $nslide ++;
                    endwhile; ?>
                </div>
                <div class="carousel-inner">
                    <?php while ( have_rows( 'slider' ) ) : the_row(); ?>
                        <div class="carousel-item mk-main-say-slider" data-bs-interval="false">
                            <img src="<?php the_sub_field( 'img' ); ?>" class="d-block slider-image" alt="slide">
                            <div class="mk-slider-content">
                                <p><i>"<?php the_sub_field( 'quote' ); ?>"</i></p>
                                <p class="text-bold"><?php the_sub_field( 'name' ); ?></p>
                                <p><?php the_sub_field( 'position' ); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"><?php _e( 'Previous', 'micra' ) ?></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"><?php _e( 'Next', 'micra' ) ?></span>
                </button>
                <?php endif; ?>
            </div>
        </section>
        <section class="mk-main-touch">
            <div class="mk-main-touch-text">
                <h2><?php the_field( 'h2_form' ); ?></h2>
                <div>
                    <a href="mailto:<?php trim( the_field( 'email' ) ); ?>"><?php trim( the_field( 'email' ) ); ?></a>
                    <p><?php the_field( 'address' ); ?></p>
                </div>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="38" title="Get-in-Touch"]' ) ?>
        </section>
    </main>

<?php get_footer();