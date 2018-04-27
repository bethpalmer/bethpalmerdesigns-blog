<?php get_header(); ?>
<!-- 
<?php get_sidebar(); ?> -->

<section class="about-me stitched">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10 col-lg-offset-1 text-center">
                    
                    
                    <!-- 
                    <div class="col-sm-8">
                        <div class=""> -->
                        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <article>

                                <h1><a class="orange" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                                <ul class="no-bullet single-post">
                                    <li class="author">
                                        <span class="wpt-avatar small">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 24); ?>
                                        </span>
                                        by <?php the_author_posts_link(); ?>
                                    </li>
                                    <li class="cat">in <?php the_category(', '); ?></li>
                                    <li class="date">on <?php the_time('F j, Y'); ?></li>
                                </ul>
                                <hr class="meta-deets">
                                <?php if ( get_the_post_thumbnail() ) : ?>
                                <div class="img-container">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                                <?php endif; ?>
                                <div class="single-post text-left">
                                    <?php the_content(); ?>
                                </div>
                                <hr class="blog">
                                <div class="text-left">
                                    <?php comments_template(); ?>
                                </div>                            
                            </article>

                            <!-- <h1><?php the_title(); ?></h1>
                            <hr>
                            <p><?php the_content(); ?></p> -->
                        	<?php endwhile; else : ?>
								<p><?php _e( 'Sorry, no pages found.' ); ?></p>
							<?php endif; ?>
                    <!--     </div>
                    </div> -->
                </div>
            </div>

        </div>

    </section>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-10 col-lg-offset-1">
                
                <div class="col-12 col-sm-4 navigation-box stitch text-center">
                    <h5 class="green">Previous Post</h5>
                    <?php previous_post_link() ?>
                    
                </div>
                <div class="col-12 col-sm-4 navigation-box stitch text-center">
                    <h5 class="green">Blog Home Page</h5>
                    <a href="<?php bloginfo('url'); ?>">Main Blog Page</a>
                </div>
                <div class="col-12 col-sm-4 navigation-box stitch text-center">
                    <h5 class="green">Next Post</h5>
                    <?php next_post_link() ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>