<?php get_header(); ?>

<?php get_sidebar(); ?>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Welcome to the Blog</h1>
                <p class="summary-text">-- Most recent posts show at the top --</p>
            </div>
        </div>

       

        <div class="row">
            <div class="col-md-12 col-lg-10 col-lg-offset-1">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <div class="col-12 col-sm-4 blog-box stitch text-center">

                    <?php get_post_class('post'); ?>

                    <h3><a class="orange" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    
                    <p class="blog-meta"><?php echo strip_tags(get_the_excerpt() ); ?></p>
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
                </div>
            
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no pages found.' ); ?></p>
                <?php endif; ?>

                <!-- <div class="col-12 col-sm-4 info-box stitch">
                    <a href="services.html#web-support" class="know-more">
                        <div class="circle stitch-inverse">
                            <i class="fa fa-4x fa-life-ring icon"></i>
                        </div>
                    </a>
                    <h3>Web Support</h3>
                    <p>I offer ongoing dedicated web support and maintenance for all budgets, for both new and existing sites.</p>
                    <a href="services.html#web-support" class="btn btn-white more">learn more</a>

                </div>
                <div class="col-12 col-sm-4 info-box stitch">
                    <a href="services.html#graphic-design" class="know-more">
                        <div class="circle stitch-inverse">
                            <i class="fa fa-4x fa-pencil icon"></i>
                        </div>
                    </a>
                    <h3>Graphic Design</h3>
                    <p>I create graphics and branding which truly represents your company's personality, and can deliver printed media from concept to your door.</p>
                    <a href="services.html#graphic-design" class="btn btn-white more">learn more</a>

                </div> -->
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>