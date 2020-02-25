
<!--weird ass wordpress template heiarchy shit that basically says this is the page that will become the posts 
page---->

<?php get_header(); ?>

<div class="post-container">
    <div class="post-container-inner flex">

        <?php
            while ( have_posts() ) : the_post();

            $title = get_the_title();
            $content = get_the_content();
            $post_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $def_img = get_field('default_post_thumbnail_image', 'options');

        ?>
        
        <a href="<?the_permalink();?>">
            <div class="blog-card">
                <?php 
                    if(has_post_thumbnail()){
                        $blog_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    } else {
                        $blog_img = get_field('default_post_thumbnail_image', 'options')['url'];
                    }
                ?>

                <div class="card-img" style="background-image:url('<?=$blog_img?>')"></div>
                <div class="blog-text">
                    <h1><?=$title?></h1>
                    <p><?=wp_trim_words( $content, 20 )?></p>
                </div>
            </div>
        </a>

            
        <?php
        endwhile;
        ?>
    </div>

    <div class="sidebar">
      <?php dynamic_sidebar( 'blog_post_sidebar' ); ?>
    </div>

</div>


<?php get_footer();?>