<?php get_header(); ?>
<!-- CONTENT TWO -->
<div class="content-tema">    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="content-tema-left">
            <div class="categories">            
                <small> <?php the_time('j M Y'); ?> | 125 visitas | <?php comments_popup_link('0 comentário','1 comentário','comentários') ?></small>
                <h1>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>
                <p><?php the_excerpt(); ?></p>		

            </div>
        </div>
    <?php endwhile;else:?>            
    <?php endif;?>
    <!-- CONTENT SIDEBAR-->
    <?php get_sidebar(); ?>
    <!-- END CSIDEBAR-->

    <div class="clear"></div>
</div>
<!-- END CONTENT TWO -->

</div>
<!-- END CONTENT -->
<?php get_footer(); ?>