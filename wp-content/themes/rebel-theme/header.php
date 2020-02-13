
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
            if ( is_page('Home') ) {
                $toppic = get_field('front_page_hero_image', 'options');
            }
            elseif ( is_page('The Rebellion') ) {
                $toppic = get_field('the_rebellion_hero_image', 'options');
            }
            elseif ( is_page('services') ) {
                $toppic = get_field('the_rebellion_hero_image', 'options');
            }
            elseif ( is_page('news') ) {
                $toppic = get_field('services_hero_image', 'options');
            }
            elseif ( is_page('contact') ) {
                $toppic = get_field('default_hero_image', 'options');
            }            
            else {
                $toppic = get_field('services_hero_image', 'options');
            } 
        
        ?>
        <header id="home" class="flex" style="background-image:url('<?=$toppic['url'];?>')">


        









        
            <!--desktop nav-->
            <div class="icon-positioning flex">
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
                    <div class="header-text flex ">
                    <!--conditilnals for hero header and sub header for each page -->
                    <?php 
                        if ( is_page('Home') ) {
                            $hero_header = get_field('front_page_hero_title', 'options');
                            $hero_sub_header = get_field('front_page_hero_sub_title', 'options');
                        }
                        elseif ( is_page('The Rebellion') ) {
                            $hero_header = get_field('the_rebellion_page_hero_header', 'options');
                            $hero_sub_header = get_field('the_rebellion_page_hero_sub_header', 'options');
                        }
                        elseif ( is_page('services') ) {
                            $hero_header = get_field('services_page_hero_header', 'options');
                            $hero_sub_header = get_field('services_page_hero_sub_header', 'options');
                        }
                        elseif ( is_page('news') ) {
                            $hero_header = get_field('news_page_hero_header', 'options');
                            $hero_sub_header = get_field('news_page_hero_sub_header', 'options');
                        }
                        elseif ( is_page('contact') ) {
                            $hero_header = get_field('contact_page_hero_header', 'options');
                            $hero_sub_header = get_field('contact_page_hero_sub_header', 'options');
                        }            
                        else {
                            $hero_header = get_field('front_page_hero_title', 'options');
                            $hero_sub_header = get_field('front_page_hero_sub_title', 'options');
                        } 
        
                    ?>



                        <h1><?=$hero_header;?></h1>
                        <span><?=$hero_sub_header;?></span>
                        <div class="green-line"></div>
                    </div>
                    <div class="call-to-action flex">

                        <!--conditilnals for hero button text and button link for each page -->
                    <?php 
                        if ( is_page('Home') ) {
                            $hero_button1_text = get_field('front_page_hero_button_one_text', 'options');
                            $hero_button1_lnk = get_field('front_page_hero_button_one_link', 'options');
                            $hero_button2_text = get_field('front_page_hero_button_two_text','options');
                            $hero_button2_lnk = get_field('front_page_hero_button_two_link','options');
                        }
                        elseif ( is_page('The Rebellion') ) {
                            $hero_button1_text = get_field('the_rebellion_hero_button_one_text', 'options');
                            $hero_button1_lnk = get_field('the_rebellion_hero_button_one_link', 'options');
                            $hero_button2_text = get_field('the_rebellion_hero_button_two_text','options');
                            $hero_button2_lnk = get_field('the_rebellion_hero_button_two_Link','options');
                        }
                        elseif ( is_page('services') ) {
                            $hero_button1_text = get_field('services_hero_button_one_text', 'options');
                            $hero_button1_lnk = get_field('services_hero_button_one_link', 'options');
                            $hero_button2_text = get_field('services_hero_button_two_text','options');
                            $hero_button2_lnk = get_field('services_hero_button_two_link','options');
                        }
                        elseif ( is_page('news') ) {
                            $hero_button1_text = get_field('news_hero_button_one_text', 'options');
                            $hero_button1_lnk = get_field('news_hero_button_one_link', 'options');
                            $hero_button2_text = get_field('news_hero_button_two_text','options');
                            $hero_button2_lnk = get_field('news_hero_button_two_link','options');
                        }
                        elseif ( is_page('contact') ) {
                            $hero_button1_text = get_field('contact_hero_button_one_text', 'options');
                            $hero_button1_lnk = get_field('contact_hero_button_one_link', 'options');
                            $hero_button2_text = get_field('contact_hero_button_two_text','options');
                            $hero_button2_lnk = get_field('contact_hero_button_two_link','options');
                        }            
                        else {
                            $hero_button1_text = get_field('contact_hero_button_one_text', 'options');
                            $hero_button1_lnk = get_field('contact_hero_button_one_link', 'options');
                            $hero_button2_text = get_field('contact_hero_button_two_text','options');
                            $hero_button2_lnk = get_field('contact_hero_button_two_link','options');
                        } 
        
                    ?>






                        <a href=<?=$hero_button1_lnk;?> class="button white-button"><?=$hero_button1_text;?></a>
                        <a href=<?=$hero_button2_lnk;?> class="button green-button"><?=$hero_button2_text;?></a>
                    </div>
                </div>
            </div>

            <!--Tri-Fold---------------------------------------------------------------------->
            <?php
                $tri_img = get_field('triangle_image', 'options');
            ?>
            <div class="triangle-img background-img-settings" style="background-image:url('<?=$tri_img['url'];?>')"></div>
            
        </header>

   


    