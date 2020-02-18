
<!--FORM--------------------------------------------------------------------------------->
<?php 
            if ( is_page('Home') ) {
                $form_img = get_field('home_form_background_image', 'options');
            }
            elseif ( is_page('The Rebellion') ) {
                $form_img = get_field('the_rebellion_form_image', 'options');
            }
            elseif ( is_page('services') ) {
                $form_img = get_field('services_form_image', 'options');
            }
            elseif ( is_page('news') ) {
                $form_img = get_field('news_form_image', 'options');
            }
            elseif ( is_page('contact') ) {
                $form_img = get_field('contact_form_image', 'options');
            }            
            else {
                $form_img = get_field('email_form_background_image', 'options');
            } 
        
?>
        

<div style="background-image:url('<?=$form_img['url'];?>');" class="form-section flex background-img-settings">
    <div class="form-overlay"></div>
    <div class="container">
        <div id="contact" class="section1 flex">
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

<!--FOOTER------------------------------------------------------------>

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


<?php wp_footer();?> <!--this is for the js script tags and what not-->
</body>
</html>