<?php

/*
  Template Name: Rebellion
  rebellion.php
*/

?>

<?php get_header();?>

<?php
  $tr_header_h1 = get_field('header_1');
  $tr_header_span = get_field('sub_header');
  $tr_header_par = get_field('catch_phrase');

  $sar_bio_img = get_field('sarah_image')['url'];
  $sar_bio_head = get_field('first_last_name');
  $sar_bio_span = get_field('company_position_title');
  $sar_bio_TC = get_field('bio_top');
  $sar_bio_BB1 = get_field('bio_bottom');
  $sar_bio_BB2 = get_field('bio_bottom_two');
  $sar_bio_BB_end = get_field('bio_bottom_end');


  $kar_bio_img = get_field('kare_image')['url'];
  $kar_bio_head = get_field('name');
  $kar_bio_span = get_field('kare_company_title');
  $kar_bio_TC = get_field('kare_bio_top_content');
  $kar_bio_BB1 = get_field('kare_bio_bottom_1');
  $kar_bio_BB2 = get_field('kare_bio_bottom_2');
  $kar_bio_BB_end = get_field('kare_bio_bottom_end');

?>

<div class="reb-head-img-overlay"></div>
<main class="flex">
        <div class="container flex">

            <div id="main-section-header" class="main-section-header flex">
                <h1><?=$tr_header_h1?> </h1>
                <span><?=$tr_header_span?></span>
                <div class="green-line"></div>
                <p><?=$tr_header_par?></p>
            </div>


            <!--SARAH SECTION----------------------------------------------------------------------------------------------------------------------------->
            <!-------------------------------------------------------------------------------------------------------------------------------------------->
            <!-------------------------------------------------------------------------------------------------------------------------------------------->
            <!-------------------------------------------------------------------------------------------------------------------------------------------->
            <!-------------------------------------------------------------------------------------------------------------------------------------------->
            <!-------------------------------------------------------------------------------------------------------------------------------------------->
            <!-------------------------------------------------------------------------------------------------------------------------------------------->
            <!-------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="bio-section sarah">
                <div class="bio-top flex">


                    <img src="<?=$sar_bio_img?>" alt="sarah olmstead working the phones" />

                    <div class="top-content">
                        <h2><?=$sar_bio_head?></h2>
                        <span><?=$sar_bio_span?></span>
                        <p><?=$sar_bio_TC?>
                        </p>
                    </div>
                </div>

                <div class="bio-bottom">
                    <br>
                    <p><?=$sar_bio_BB1?>
                    </p>
                    <br>
                    <p><?=$sar_bio_BB2?>
                    </p>
                    <br>
                    <br>
                    <p><?=$sar_bio_BB_end?>
                    </p>
                </div>
            </div>
        </div>



        <!--KARE SECTION----------------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------------------------------------------------------------->

        <div class="bio-section flex kare-container">
            <div class="container">

                <div class="bio-top flex">
                    <img src="<?=$kar_bio_img?>" alt="Karestin olmstead working the phones">

                    <div class="top-content">
                        <h2><?=$kar_bio_head?></h2>
                        <span><?=$kar_bio_span?></span>
                        <p><?=$kar_bio_TC?>
                        </p>
                    </div>
                </div>

                <div class="bio-bottom">

                    <p><?=$kar_bio_BB1?>
                    </p>
                    <br>

                    <p><?=$kar_bio_BB2?>
                    </p>
                    <br>
                    <p><?=$kar_bio_BB_end?>
                    </p>
                </div>

            </div>
            <!--CONTAINER-->
        </div>
        <!--BIO SECTION-->
    </main>

    <!-----WHY WE DO IT----------------------------------------------------->
<?php
    $WWDI_bg_img = get_field('why_we_do_it_header_background_image')['url'];
    $WWDI_span = get_field('why_we_do_it_header_sub_header');
    $WWDI_h1 = get_field('why_we_do_it_header');
    $WWDI_par = get_field('why_we_do_it_header_paragraph');
    $WWDI_par2 = get_field('why_we_do_it_paragraph_2');

?>

    <section class="why flex background-img-settings" style="background-image:url('<?=$WWDI_bg_img?>')">
        <div class="container">
            <div class="why-content flex">
                <h1><?=$WWDI_h1?></h1>
                <span><?=$WWDI_span?></span>
                <br>
                <br>
                <p> <?=$WWDI_par?>
                    <br>
                    <br>
                    <?=$WWDI_par2?>
                </p>
                <div class="green-line"></div>
            </div>
        </div>
    </section>

<?php get_footer();?>