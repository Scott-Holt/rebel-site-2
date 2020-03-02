<!--this page is the search result page and can be copied and pasted everytime from home.php-->

<?php get_header(); ?>

<div class="container-holding-all"><!--this div contains two elements. One being the post container and Two
being the pagination. I did this because I effed up and need this to be the master container so I could set up the
flex properties of the two elements properly -->
    <div class="post-container">
        <div class="post-container-inner flex">

        <?php if (have_posts()) : ?>
            <?php
                
                while ( have_posts() ) : the_post();

                $title = get_the_title();
                $content = get_the_content();

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
                        <p><?=wp_trim_words( $content, 15 )?></p>
                    </div>
                    <!-- <div class="green-button button blog-button">Read More</div> -->
                </div>
            </a>

                
            <?php
            endwhile;
            ?>

        <?php else: ?>

        <div class="no-results">
            <h2>Sorry, there were no results found for <?php echo $_GET['s']; ?>.</h2>
            <a href="<?=home_url();?>">Return to Home Page</a>
        </div>

        <?php endif;?>
        </div>

        <div class="sidebar">
        <?php dynamic_sidebar( 'blog_post_sidebar' ); ?>
        </div>

    </div>

    <div class="pag-container">
        <?php pagination_nav(); ?>
    </div>

</div>


<?php get_footer();?>