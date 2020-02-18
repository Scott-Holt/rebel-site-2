<?php

/*
  Template Name: Services
  services.php
*/

?>

<?php get_header();?>

<!--MAIN---------------------------------------------------------------------->
<main class="flex">
        <div class="container flex">

        <?php
          $our_services = get_field('our_services_header');
          $our_services_sub = get_field('our_services_sub_header');
          $our_services_par = get_field('our_services_paragraph');
        ?>

            <div id="main-section-header flex" class="main-section-header flex">
                <h1><?=$our_services?> </h1>
                <span><?=$our_services_sub?></span>
                <p> <?=$our_services_par?></p>
                <div class="green-line"></div>
            </div>
        </div>

        <div class="blocks flex">
          <!--------BLOCKS REPEATER----------------->
          <?php if( have_rows('services_blocks') ): ?>
          <?php while( have_rows('services_blocks') ): the_row(); ?>

          <?php
            $serv_bg_img = get_sub_field('services_image')['url'];
            $serv_header = get_sub_field('service_name');
            $serv_sub_header = get_sub_field('service_sub_header');
            $serv_par = get_sub_field('service_paragraph');
            $serv_btn_txt = get_sub_field('services_button_text');
            $serv_btn_lnk = get_sub_field('services_button_link');
          ?>
              

          <div class="row row<?=get_row_index();?> background-img-settings" style="background-image:url('<?=$serv_bg_img?>')">
          <div class="phone-background"></div>
          <div class="container">
                    <h1><?=$serv_header?></h1>
                    <span><?=$serv_sub_header?></span>
                    <p><?=$serv_par?>
                    </p>
                    <a class="button button-index-<?=get_row_index();?>" href="<?=$serv_btn_lnk?>"><?=$serv_btn_txt?></a>
                    
                </div>
                
            </div>




          <?php endwhile; ?>
          <?php endif; ?>










            <!-- /////////ROW 1/////////////////////////////////////////////////////////////////////////// -->
            <!-- <div class="row row1 background-img-settings">
                <div class="container">
                    <h1>cross dock</h1>
                    <span>cost effective & business friendly</span>
                    <p>Rebel Logistic Service offers cross-docking for our customers.
                        Cross-docking is a vital asset in reducing labor costs and increasing speed to market for the
                        customer. It allows the customer to utilize the total volume in a line haul and eliminates the
                        need to build pallets that are final mile friendly. Utilizing a cross dock operation will keep
                        your delivery schedule consistent while speeding up your outbound process
                    </p>
                    <a class="button white-button" href="./contact.html">Contact</a>
                </div>
            </div> -->



            <!-- /////////ROW 2/////////////////////////////////////////////////////////////////////////// -->

            <!-- <div class="row row2 background-img-settings">
                <div class="container">
                    <h1>retail</h1>
                    <span>better than traditional methods</span>
                    <p>The objective of many retailers is to improve their delivery
                        model.
                        Partner with Rebel Logistics Service
                        to
                        centralize and reduce cost of store delivery
                    </p>
                    <div class="retail-list flex">
                        <p>Rebel leads the way with final mile store delivery:</p>
                        <ul class="flex">
                            <li>Low impact at the store</li>
                            <li>Claims-free</li>
                            <li>On-time</li>
                        </ul>
                    </div>
                    <a class="button green-button" href="the-rebellion.html">Learn More</a>
                </div>
            </div> -->

            <!-- /////////ROW 3/////////////////////////////////////////////////////////////////////////// -->
            <!-- <div class="row row3 background-img-settings">
                <div class="container">
                    <h1>final mile</h1>
                    <span>your customized road map</span>
                    <p>We know where the rubber meets the road. The supply chain is a constant cycle. Any delay in
                        product-to-shelf is a loss in profit. If your goods are not on the shelf in a timely manner, all
                        efforts will be in
                        vain. Rebel Logistics will create a customized plan for your
                        supply chain to
                        lower cost and increase speed to market. With locations across the U.S., we can help your supply
                        chain get on the right route. We have location solutions in many
                        parts of
                        the country.
                    </p>
                    <a class="button white-button" href="./contact.html">Contact</a>
                </div>
            </div> -->



            <!-- /////////ROW 4/////////////////////////////////////////////////////////////////////////// -->
            <!-- <div class="row row4 background-img-settings">
                <div class="container">
                    <h1>Technology</h1>
                    <span>Rebel Integrated</span>
                    <p>Technology and software are no longer "value added" components but expected
                        within the supply
                        chain. Many retailers use proprietary software to manage the movement of goods
                        and services
                        from the very first touch to the customers hand. Within this technology,
                        retailers better
                        plan and view goods through the pipeline and Rebel supports this transparency by
                        working
                        with the customer.
                        Advance shipping and staged inventory is crucial to ensure a constant flow of
                        product into
                        the cross dock and into your stores. This method works with your inventory teams
                        to manage
                        the ebb and flow of seasonal volumes and works with min and max parameters to
                        assist the
                        store in handling your volumes. FIFO or LIFO can be utilized to manage product
                        for a more
                        customized pull.
                    </p>
                    <a class="button green-button" href="./the-rebellion.html">Learn More</a>
                </div>
            </div> -->

        </div>
        <!--container-->
    </main>

    <section class="flex">
        <div class="container">

        <?php
            $w2lm_header = get_field('want_to_learn_more_header');
            $w2lm_sub_header = get_field('want_to_learn_more_sub_header');
            $w2lm_arrow_img = get_field('arrow_image')['url'];

        ?>
            <h1><?=$w2lm_header?></h1>
            <span><?=$w2lm_sub_header?></span>
        </div>
        <div style="background-image:url('<?=$w2lm_arrow_img?>')" class="arrow background-img-settings"></div>

    </section>

<?php get_footer();?>