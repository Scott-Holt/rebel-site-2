<?php
/*
  Template Name: Home Page
  front-page.php
*/
get_header(); ?>


<!---MAIN SECTION--------------->
<!-- SERVICES -------------------------------------------------------------------->

<main class="flex">
    <div class="container icons-container flex">

    <?php
        $serv_head = get_field("services_header");
        $serv_sub_head = get_field("services_sub_header");
    ?>

        <div id="main-section-header" class="main-section-header flex">
            <h1><?=$serv_head?></h1>
            <span><?=$serv_sub_head?></span>
        </div>
        

        <div class="icons flex">
        <?php 
         if(have_rows("services_offered")):
            while(have_rows("services_offered")) : the_row();?>
            
            <?php 
            $service = get_sub_field("service_name");
            $service_image = get_sub_field("service_image")["url"];
            $service_image_alt = get_sub_field("service_image")["alt"];
            $service_link = get_sub_field("service_link");
            ?>
            

            <div class="final-mile-icon icon flex icon-number-<?php echo get_row_index(); ?>">
                <a href="<?=$service_link?>"><img src="<?=$service_image?>"
                        alt="<?=$service_image_alt?>"></a>
                <span><?=$service?></span>
            </div>
            
            <?php endwhile; 
             endif; ?>
        
        </div>

        <?php 
          $disclaimer = get_field("services_bottom_disclaimer");
        ?>
        <span class="services-footer"><?=$disclaimer?></span>
    </div>
    <!--container div-->
</main>


<!-- WHY REBEL -------------------------------------------------------------------->

<?php 
    $wr_bg_img = get_field("background_image")["url"];
    $why_reb_header = get_field("why_rebel_heading");
    $wr_sub_head = get_field("why_rebel_sub_heading");
    $wr_par = get_field("why_rebel_text");
?>

<div id="the-rebellion" style="background-image:url(<?=$wr_bg_img;?>);"; class="why-rebel background-img-settings flex">
    <!-- <div class="why-rebel-overlay flex"> -->

    <div class="row-container container flex">
        <div class="col col-1 flex">
            <h1><?=$why_reb_header?></h1>
            <span><?=$wr_sub_head?></span>
            <p><?=$wr_par?></p>
        </div>
        <div class="col col-2">
        <?php
         $wr_btn1_text = get_field('why_rebel_button_1_text');
         $wr_btn1_lnk = get_field('why_rebel_button_1_link');
         $wr_btn2_text = get_field('why_rebel_button_2_text');
         $wr_btn2_lnk = get_field('why_rebel_button_2_link');

        ?>
            <a class="white-button button" href=<?=$wr_btn1_lnk?>><?=$wr_btn1_text?></a>
            <a class="green-button button" href=<?=$wr_btn2_lnk?>><?=$wr_btn2_text?></a>
        </div>
    </div>
    <!-- </div> -->
</div>


<!-- BACK 2 BASICS -------------------------------------------------------------------->

<?php
    $b2b_head = get_field('b2b_heading');
    $b2b_subhead = get_field('b2b_sub_heading');
    $b2b_par = get_field('b2b_paragraph');
    $b2b_btn_txt = get_field('b2b_button_text');
    $b2b_btn_lnk = get_field('b2b_button_link');
    $b2b_bg_img = get_field('b2b_image');
?>

<div  alt="<?=$b2b_bg_img['alt'];?>" class="back2basics background-img-settings flex" style="background-image:url('<?=$b2b_bg_img['url'];?>');">
    <div class="b2b-overlay"></div>
    <div class="row-container container flex">

        <div class="wrapper flex">
            <h1><?=$b2b_head?></h1>
            <span><?=$b2b_subhead?></span>
            <p><?=$b2b_par?>
            </p>
            <a href=<?=$b2b_btn_lnk?> class="button green-button"><?=$b2b_btn_txt?></a>
        </div>
    </div>
</div>



<!-- video -------------------------------------------------------------------->


<?php
    $home_video = get_field('video');
    $video_poster = get_field('video_default_image');
?>

<video playsinline autoplay="true" muted loop id="myVideo" poster=<?=$video_poster?>>
    <source src="../wp-content/themes/rebel-theme/videos/video.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>


<?php get_footer();?>

