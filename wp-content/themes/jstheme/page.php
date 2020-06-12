<?php get_header(); ?>
<!-- CONTENT TWO -->
<div class="content-tema">
    <!-- CONTENT PAGE-->
    <div class="content-tema-left">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(__('Leia mais')); ?></p>
            <?php endwhile; else: ?>

<?php endif; ?>        
    </div>
    <!-- END CONTENT PAGE-->

    <!-- CONTENT SIDEBAR-->
<?php get_sidebar(); ?>
    <!-- END CSIDEBAR-->
    <div class="clear"></div>
</div>
<!-- END CONTENT TWO -->
<?php get_footer(); ?>
