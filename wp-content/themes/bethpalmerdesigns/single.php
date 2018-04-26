<?php get_header(); ?>


<section class="about-me stitched">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    
                    <?php get_sidebar(); ?>
                    
                    <div class="col-sm-8">
                        <div class="text-center">
                        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <article>

                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                                <ul>
                                    <li class="author">
                                        <span class="wpt-avatar small">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 24); ?>
                                        </span>
                                        by <?php the_author_posts_link(); ?>
                                    </li>
                                    <li class="cat">in <?php the_category(', '); ?></li>
                                    <li class="date">on <?php the_time('F j, Y'); ?></li>
                                </ul>

                                <?php if ( get_the_post_thumbnail() ) : ?>
                                <div class="img-container">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                                <?php endif; ?>

                                <?php the_content(); ?>
                                <?php comments_template(); ?>
                                
                            </article>
                            <h2>Hello hello! Single page here!!</h2>

                            <!-- <h1><?php the_title(); ?></h1>
                            <hr>
                            <p><?php the_content(); ?></p> -->
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