<?php get_header(); ?>


<section class="about-me stitched">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <h3>Here we are on index page!!</h3>
                        <div class="text-center">
                        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <h3 class="orange">Can I add subtitle...? Or date here??</h3>
                            <p><?php the_content(); ?></p>
                        	<?php endwhile; else : ?>
								<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <h5 class="cta-btn">Know more about me?</h5>
                        <a href="https://bethpalmerdesigns.co.uk/about.html" class="btn btn-custom text-uppercase">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>