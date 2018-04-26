<?php get_header(); ?>


<section class="about-me stitched">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <h3>Archive page here!</h3>

                    <div class="col-sm-9">
                        <div class="text-center">
                        	
                            <div class="leader">
                                <h1><?php wp_title( '' ); ?> Blog Posts</h1>
                            </div>

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <article>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <h2><?php the_excerpt(); ?></h2>

                                <ul class="no-bullet">
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
                            </article>

                            <!-- <h1><?php the_title(); ?></h1>
                            <hr>
                            <p><?php the_content(); ?></p> -->
                        	<?php endwhile; else : ?>
								<p><?php _e( 'Sorry, no pages found.' ); ?></p>
							<?php endif; ?>
                        </div>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>