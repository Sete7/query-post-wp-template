<?php get_header(); ?>

<!-- CONTENT TWO -->
<div class="content-two">
    <main class="main-content">
        <!-- FEATURED -->
        <section class="featured">
            <article class="featured-left">
                <div class="box-left">
                    <?php query_posts('showposts=1'); ?>
                    <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                    <small> <?php the_time('j M Y'); ?> | <?php if(function_exists('the_views')){
the_views(); }?> | <?php comments_popup_link('0 comentário', '1 comentário', 'comentários') ?></small>
                            <?php the_post_thumbnail(); ?>                    
                            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?></p>

                        <?php endwhile;
                    else: ?>
<?php endif; ?>
                    <!-- LIST FEATURED -->
                    <ul>
                        <?php query_posts('showposts=3&offset=3'); ?>
                        <?php if(have_posts()):while (have_posts()) : the_post(); ?>                        
                        <li>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_excerpt_rereloaded(10); ?>
                            </a>
                        </li>
                        <?php endwhile;else:?>
                        <?php endif;?>
                    </ul>
                    <!-- END LIST FEATURED -->
                </div>
            </article>
            <article class="featured-right">
                <?php query_posts('showposts=3'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- BOX RIGHT -->
                        <div class="box-right">
                            <?php the_post_thumbnail(); ?>
                            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt_rereloaded(25); ?></p>
                        </div>
                        <!-- END BOX RIGHT -->
                    <?php endwhile;
                else: ?>
<?php endif; ?>
            </article>
        </section>
        <!-- END FEATURED -->

        <!-- FEATURED -->
        <section class="featured-two">
            <article class="box-featured sports">
                <div class="sports-box">                    
                    <?php query_posts('showpost=1&cat=3&offset=1'); ?>
                    <?php if(have_posts()) :  while(have_posts()) : the_post(); ?>
                    <h2>Espote</h2>
                    <?php the_post_thumbnail(); ?> 
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt_rereloaded(15); ?></p>
                    <small> <?php the_time('j M Y'); ?> | <?php if(function_exists('the_views')){
the_views(); }?> | <?php comments_popup_link('0 comentário', '1 comentário', 'comentários') ?></small>
                    <?php endwhile;else:?>
                    
                    <?php endif;?>
                </div>
            </article>
            <article class="box-featured fashion">
                <div class="fashion-box">
                     <?php query_posts('showpost=1&cat=4&offset=1&orderby=rand'); ?>
                    <?php if(have_posts()) :  while(have_posts()) : the_post(); ?>
                    <h2>Moda</h2>
                    <?php the_post_thumbnail(); ?> 
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt_rereloaded(15); ?></p>
                    <small> <?php the_time('j M Y'); ?> | <?php if(function_exists('the_views')){
the_views(); }?> | <?php comments_popup_link('0 comentário', '1 comentário', 'comentários') ?></small>
                    <?php endwhile;else:?>
                    
                    <?php endif;?>
                </div>
            </article>
            <aside class="sidebar">
                <div class="sidebar-box">
                    <h2>Mais acessados</h2>
                    <ul class="list-sidebar">
                        <li><?php get_most_viewed(); ?></li>             
                    </ul>
                    
                    <h2>Tags</h2>
                    <?php wp_tag_cloud('smallest=7&largest=18&number=15&orderby=count'); ?>
                </div>
            </aside>
        </section>
        <!-- END FEATURED -->
    </main>
    <div class="clear"></div>
</div>
<!-- END CONTENT TWO -->

</div>
<!-- END CONTENT -->

<?php get_footer(); ?>