<?php
/*
  Template Name: Single Post
  single.php (the Template for displaying all single posts)
*/
?>




<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head();?>
    </head>
    
    <body <?php body_class();?>>

        <!-- HERO BG IMAGE -->


        <!-- if current page is something, then display certain hero image. If no image assinged, than display
        default image-->
        
        <?php 
          if(has_post_thumbnail()){
              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          } else {
              $url = get_field('default_post_thumbnail_image', 'options')['url'];
          }
        ?>  
      
        <header id="home" class="flex single-post-header" style="background-image:url(<?=$url?>)">

        <!-- <div class="blog-header-image"> -->
          <!-- <img class="blog-bg-img" src=<?=the_post_thumbnail()?>/> -->

        <!--desktop nav-->
        <div class="icon-positioning nav-4-post flex">
                <!-- <a href="index.html"><img class="logo" src="./images/index-images/Logo.png" /></a> -->
                
                <?php 
                  $rebel_logo = get_field('rebel_logo_header', 'options')['url'];
                  $rebel_logo_alt = get_field('rebel_logo_header', 'options')['alt'];
                ?>

                <a href=<?=home_url();?>><img src= <?=$rebel_logo?> alt="<?=$rebel_logo_alt?>"></a>

                <span class="ham-test" id="hamburger-icon">&#9776;</span>
                


                <nav class="desktop-nav">
                    <?php wp_nav_menu();?>
                </nav>
            </div>



            <!-- </div> -->
            <!--desktop nav end -->


            <!-- PHONE NAV -->

            <nav class="phone-nav" id="mobile-nav">
                <?php
                    $mobile_nav_logo = get_field('mobile_nav_logo', 'options')['url'];
                ?>
                <a href=<?=home_url();?>><img class="nav-logo" src=<?=$mobile_nav_logo?>> </a>
                <span id="close-icon">&#215;</span>
                <?php wp_nav_menu();?>
            </nav>



            <div class="container">
                <div class="hero flex">
                    <div class="header-text flex single-post-header-text ">
                    <!--conditilnals for hero header and sub header for each page -->
                   
                    </div>
                  
                </div>
            </div>




        <!-- </div> -->









        
            

            <!--Tri-Fold---------------------------------------------------------------------->
            <!-- <?php
                $tri_img = get_field('triangle_image', 'options');
            ?>
            <div class="triangle-img background-img-settings" style="background-image:url('<?=$tri_img['url'];?>')"></div> -->
            
        </header>
        </div>










<!-------------------------------------------------------------------------------------------------------------->

<main id="single-post">


  <div class="single-post-container">
    <?php if ( have_posts() ): ?>
      <?php while ( have_posts() ): the_post(); ?>
      <div class="title">
        <h1><a href="<?the_permalink();?>"><?the_title();?></a></h1>
        <span><?=the_date();?></span>
      </div>
    
        <!-- Content Layout Here -->
        <div class="the-content">
          <?php the_content(); ?>
        </div>

    <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</main>

<?php get_footer();