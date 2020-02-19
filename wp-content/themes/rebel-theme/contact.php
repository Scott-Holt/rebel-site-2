<?php

/*
  Template Name: Contact
  contact.php
*/

?>

<?php get_header();?>

<main class="flex">
        <div class="container flex">

            <div id="main-section-header" class="main-section-header flex">

          <?php
            $con_pg_header = get_field('contact_page_header');
            $con_pg_sub_header = get_field('contact_page_sub_header');
            $call_us = get_field('call_us_text_1');
            $call_us2 = get_field('call_us_text_2');
            $email_us = get_field('email_us_text_1');
            $num1 = get_field('phone_number_1');
            $num2 = get_field('phone_number_2');
            $email1 = get_field('email_1');
            $email2 = get_field('email_2');
            $hoursofop = get_field('hours_of_operations_text');
            $hours = get_field('hours');
          ?>
                <h1><?=$con_pg_header?></h1>
                <span><?=$con_pg_sub_header?></span>
            </div>

            <div class="contact-box">
                <div class="text-wrapper flex">
                    <span class="call-us-mobile"><b><?=$call_us?></b><a href="tel:239-214-8344"> <?=$num1?></a></span>
                    <span class="call-us"><b><?=$call_us2?></b> <?=$num2?></span>
                    <span class="email-us"><b><?=$email_us?></b></span>
                    <a href="mailto:sales@go2rebel.com  "><?=$email1?></a>
                    <a href="mailto:operations@go2rebel.com"><?=$email2?></a>
                    <span class="hours"><b><?=$hoursofop?></b> <?=$hours?></span>
                </div>
            </div>




            <?php
             $contact_form_bg_img = get_field('contact_page_contact_form_background_image')['url'];
            ?>


            <div class="contact-form flex background-img-settings" style="background-image:url('<?=$contact_form_bg_img?>')">
                <!-- <div class="form-section flex background-img-settings">
                    <div class="container">
                        <div id="contact" class="section1 flex"> -->
                <h1>Contact Us</h1>
                <span>for more information</span>
                <form action="contact-form.php" method="POST">
                    First name:<br>
                    <input class="first-name" type="text" name="first-name">
                    <span class="validate">*Please Fill Out All Fields</span>
                    <br>
                    Last name:<br>
                    <input class="last-name" type="text" name="last-name">
                    <span class="validate">*Please Fill Out All Fields</span>
                    <br>
                    Email:<br>
                    <input class="email" name="email" type="email">
                    <span class="validate">*Please Fill Out All Fields</span>
                    <br>
                    Message:<br>
                    <!-- <input class="message" type="text"> -->
                    <textarea class="message" name="message"></textarea>
                    <span class="validate">*Please Fill Out All Fields</span>
                    <br>
                    <br>
                    <input class="submit" name="submit" type="submit" value="Submit">
                </form>
            </div>
        </div>
        </div>
    </main>

    <!----map image---------------------------------------------------------------------------->

  <?php
    $map_img = get_field('map_image')['url'];
    $map_hd = get_field('map_header');
    $map_sub_hd = get_field('map_sub_header');
    $map_disc = get_field('map_disclaimer');
  ?>


    <section class="map-section flex">
        <div class="container flex">
            <h1><?=$map_hd?></h1>
            <span><?=$map_sub_hd?></span>
            <img src="<?=$map_img?>" alt="image of a map and rebels bases around the country">
        </div>

        <span><?=$map_disc?></span>
    </section>


<!------FOOTER-------->
<footer class="flex">
        <nav class="flex">
            <?php wp_nav_menu();?>
        </nav>

        <?php
            $ft_logo = get_field('footer_rebel_logo','options')['url'];
            $ft_logo_link = get_field('footer_rebel_logo_link','options');
            $sw_logo = get_field('footer_smartway_logo','options')['url'];
            $sw_logo_link = get_field('smartway_logo_link','options');
        ?>

        <div class="footer-logo flex">
            <a class="flex" href="index.html"><img src=<?=$ft_logo;?> alt=<?=$ft_logo['alt'];?>></a>
            <a class="flex" href=<?=$sw_logo_link;?> target="_blank"><img
                    src=<?=$sw_logo;?> alt=<?=$$sw_logo['alt'];?>></a>
        </div>

    </footer>



    <div id="overlay"></div>

