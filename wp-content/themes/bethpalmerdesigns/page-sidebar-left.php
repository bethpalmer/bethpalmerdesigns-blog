<?php
/* 
    Template Name: Left Sidebar

    NOTE: Didn't actually set this up literally just becuase I don't have the styling for a 2 page template worked out, but it is as easy as 
*/
?>

<?php get_header(); ?>


<section class="about-me stitched">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    
                    <?php get_sidebar('page'); ?>

                    <div class="col-sm-8">
                        <div class="text-center">
                        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <hr>
                            <p><?php the_content(); ?></p>
                        	<?php endwhile; else : ?>
								<p><?php _e( 'Sorry, no pages found.' ); ?></p>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>