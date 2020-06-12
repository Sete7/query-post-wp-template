<?php get_header(); ?>
<!-- CONTENT TWO -->
<div class="content-tema">
    <!-- CONTENT PAGE-->
    <div class="content-tema-left">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>   
                <?php the_post_thumbnail(); ?> 
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(__('Leia mais')); ?></p>
                <small><?php if (function_exists(the_tags())) ; ?></small>

                <?php
            endwhile;
        else:
            ?>

        <?php endif; ?>  

        <!--RELACIONADOS-->
        <div class="relacionados" style="width: 100%;float: left;">
            <h1>Post Relacionados</h1>
            <?php
            if (function_exists('echo_ald_crp')) {
                echo_ald_crp();
            }
            ?>
        </div>
        <!--END RELACIONADOS-->
        
        <!--COMMENTS-->
        <div class="replace-comments">
            <?php comments_template(); ?>
        </div>
        <!--END COMMENTS-->
    </div>
    <!-- END CONTENT PAGE-->

    <!-- CONTENT SIDEBAR-->
<?php get_sidebar(); ?>
    <!-- END CSIDEBAR-->   


    <div class="clear"></div>
</div>
<!-- END CONTENT TWO -->
<?php get_footer(); ?>