<?php get_header(); ?>
<!-- CONTENT TWO -->
<div class="content-tema">
    
    <img src="<?php bloginfo('template_url'); ?>/assets/images/banner-esporte.jpg" alt=""/>
    <div class="content-tema-left">
        <div class="categories">           
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail(); ?> 
                    <small> <?php the_time('j M Y'); ?> | <?php
                        if (function_exists('the_views')) {
                            the_views();
                        }
                        ?> | <?php comments_popup_link('0 comentário', '1 comentário', 'comentários') ?>
                    </small>
            
                    <h1>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h1>
            
                    <p>
                        <?php the_excerpt_rereloaded(15); ?>
                    </p>	
                <?php endwhile;else: ?>
                <?php endif; ?>
                    
                    <?php if(function_exists('wp_pagenavi')) {wp_pagenavi();}?>
        </div>
    </div>
            

    <div class="clear"></div>
</div>
<!-- END CONTENT TWO -->

</div>
<!-- END CONTENT -->

<?php get_footer(); ?>